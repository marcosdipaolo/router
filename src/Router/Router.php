<?php

namespace MDP\Router;

use MDP\Container\Container;
use MDP\Http\Request;
use MDP\Http\Response;
use MDP\Middleware\MiddlewareInterface;
use MDP\Router\Attributes\Route;
use MDP\Router\Exceptions\PageNotFoundRouterException;
use ReflectionAttribute;
use ReflectionClass;
use ReflectionException;
use Throwable;

class Router
{
    /** @var array<string, self> */
    private static array $instances = [];

    private readonly RouteCollection $routes;

    private readonly RouteCache $cache;

    private readonly UrlGenerator $urlGenerator;

    /** @var array<int, MiddlewareInterface> */
    private array $globalMiddleware = [];

    private bool $debugMode = false;

    /**
     * @param array<int, string> $controllers
     * @throws ReflectionException
     */
    private function __construct(
        private readonly array $controllers,
        private readonly Container $container,
        ?string $cacheDir = null,
        bool $cacheEnabled = true
    ) {
        $this->routes = new RouteCollection();
        $this->cache = new RouteCache($cacheDir, $cacheEnabled);
        $this->urlGenerator = new UrlGenerator($this->routes);

        $this->loadRoutes();
    }

    /**
     * Load routes from cache or register from controllers
     *
     * @throws ReflectionException
     */
    private function loadRoutes(): void
    {
        $cached = $this->cache->load();

        if ($cached) {
            // Reconstruct routes from cache
            foreach ($cached as $routeData) {
                $route = new RouteDefinition(
                    $routeData['method'],
                    $routeData['path'],
                    $routeData['action'],
                    $routeData['middleware'],
                    $routeData['name']
                );
                $this->routes->addDefinition($route);
            }
        } else {
            // Register from controller attributes
            $this->registerRoutesFromControllerAttributes($this->controllers);
            // Cache the routes
            $this->cache->save($this->routes);
        }
    }

    /**
     * Register routes from controller method attributes
     *
     * @param array<int, string> $controllers
     * @throws ReflectionException
     */
    public function registerRoutesFromControllerAttributes(array $controllers): void
    {
        foreach ($controllers as $controller) {
            $reflectionController = new ReflectionClass($controller);
            $methods = $reflectionController->getMethods();

            foreach ($methods as $method) {
                $attrs = $method->getAttributes(Route::class, ReflectionAttribute::IS_INSTANCEOF);

                foreach ($attrs as $attr) {
                    /** @var Route $route */
                    $route = $attr->newInstance();
                    $this->routes->add(
                        $route->verb,
                        $route->path,
                        $controller . '@' . $method->getName()
                    );
                }
            }
        }
    }

    /**
     * Create or retrieve a router singleton
     *
     * @param array<int, string> $controllers
     * @throws ReflectionException
     */
    public static function create(
        array $controllers,
        Container $container,
        ?string $cacheDir = null,
        bool $cacheEnabled = true
    ): static {
        $cls = static::class;
        if (!isset(self::$instances[$cls])) {
            self::$instances[$cls] = new static($controllers, $container, $cacheDir, $cacheEnabled);
        }

        return self::$instances[$cls];
    }

    /**
     * Handle an incoming HTTP request
     *
     * @throws Throwable
     */
    public function direct(?Request $request = null, ?Response $response = null): Response
    {
        $request ??= new Request();
        $response ??= new Response();

        try {
            // Find matching route
            $match = $this->matchRoute($request->getMethod(), $request->getUri());

            if (!$match) {
                throw new PageNotFoundRouterException();
            }

            [$matched, $params] = $match;

            // Set route parameters on request
            $request->setRouteParams($params);

            // Execute middleware pipeline
            $handler = fn(Request $req, Response $res) => $this->executeController($matched, $req, $res);

            // Build middleware chain from global and route-specific middleware
            $middlewares = array_merge($this->globalMiddleware, $matched->getMiddleware());
            $response = $this->executeMiddlewareChain($middlewares, $request, $response, $handler);

            return $response;
        } catch (PageNotFoundRouterException) {
            return $response
                ->setStatusCode(404)
                ->json(['error' => 'Route not found']);
        } catch (Throwable $e) {
            if ($this->debugMode) {
                return $response
                    ->setStatusCode(500)
                    ->json([
                        'error' => 'Internal server error',
                        'message' => $e->getMessage(),
                        'file' => $e->getFile(),
                        'line' => $e->getLine(),
                    ]);
            }

            return $response
                ->setStatusCode(500)
                ->json(['error' => 'Internal server error']);
        }
    }

    /**
     * Match a route against the registered routes
     *
     * @return array{0: RouteDefinition, 1: array<string, string>}|null [$route, $params] or null if no match
     */
    private function matchRoute(string $method, string $path): ?array
    {
        foreach ($this->routes->all() as $route) {
            $params = $route->matches($method, $path);
            if ($params !== null) {
                return [$route, $params];
            }
        }

        return null;
    }

    /**
     * Execute the controller action
     */
    private function executeController(RouteDefinition $route, Request $request, Response $response): Response
    {
        [$controllerClass, $method] = explode('@', $route->getAction());

        $controller = $this->container->get($controllerClass);
        $result = $controller->$method($request, $response);

        // If controller returns a Response, use it. Otherwise wrap the result.
        if ($result instanceof Response) {
            return $result;
        }

        // If it's an array, encode as JSON
        if (is_array($result)) {
            return $response->json($result);
        }

        // Otherwise set as body
        return $response->setBody((string)$result);
    }

    /**
     * Execute middleware chain
     *
     * @param array<int, string|MiddlewareInterface> $middlewares
     * @param callable(Request, Response): Response $handler
     */
    private function executeMiddlewareChain(
        array $middlewares,
        Request $request,
        Response $response,
        callable $handler
    ): Response {
        // Build the middleware pipeline
        $pipeline = function (Request $req, Response $res) use (&$middlewares, &$pipeline, $handler) {
            if ($middlewares === []) {
                return $handler($req, $res);
            }

            $middleware = array_shift($middlewares);

            if (is_string($middleware)) {
                $middleware = $this->container->get($middleware);
            }

            if (!$middleware instanceof MiddlewareInterface) {
                throw new \RuntimeException(
                    'Middleware must implement ' . MiddlewareInterface::class
                );
            }

            return $middleware->handle($req, $res, $pipeline);
        };

        return $pipeline($request, $response);
    }

    /**
     * Add global middleware
     */
    public function middleware(string|MiddlewareInterface $middleware): self
    {
        $this->globalMiddleware[] = $middleware;
        return $this;
    }

    /**
     * Get the URL generator for reverse routing
     */
    public function url(): UrlGenerator
    {
        return $this->urlGenerator;
    }

    /**
     * Get all registered routes
     */
    public function getRoutes(): RouteCollection
    {
        return $this->routes;
    }

    /**
     * Create a route group
     *
     * @param array<int, string|MiddlewareInterface> $middleware
     */
    public function group(string $prefix, array $middleware, callable $callback): void
    {
        $this->routes->group($prefix, $middleware, $callback);
    }

    /**
     * Enable or disable debug mode
     */
    public function debug(bool $enabled = true): self
    {
        $this->debugMode = $enabled;
        return $this;
    }

    /**
     * Clear route cache
     */
    public function clearCache(): void
    {
        $this->cache->clear();
    }

    /**
     * Get all registered routes (for debugging)
     *
     * @return array<int, array{method: string, path: string, action: string, name: string|null, middleware: array<int, string|MiddlewareInterface>}>
     */
    public function listRoutes(): array
    {
        return array_map(
            fn($route) => [
                'method' => $route->getMethod(),
                'path' => $route->getPath(),
                'action' => $route->getAction(),
                'name' => $route->getName(),
                'middleware' => $route->getMiddleware(),
            ],
            $this->routes->all()
        );
    }

    /**
     * Singletons should not be cloneable
     */
    protected function __clone()
    {
    }

    /**
     * Prevent unserialization
     */
    public function __wakeup()
    {
        throw new \Exception('Cannot deserialize a singleton');
    }
}
