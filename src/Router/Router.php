<?php

namespace MDP\Router;

use Exception;
use MDP\Container\Container;
use MDP\Router\Attributes\Route;
use MDP\Router\Exceptions\PageNotFoundRouterException;
use ReflectionAttribute;
use ReflectionClass;
use ReflectionException;
use Throwable;

class Router
{
    private static array $instances = [];
    private array $get = [];
    private array $post = [];
    private array $put = [];
    private array $patch = [];
    private array $delete = [];

    /**
     * @throws ReflectionException
     */
    private function __construct(private readonly array $controllers, private readonly Container $container)
    {
        $this->registerRoutesFromControllerAttributes($controllers);
    }

    /**
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
                    $route = $attr->newInstance();
                    $verb = $route->verb;
                    $this->$verb($route->path, $controller . "@" . $method->getName());
                }
            }
        }
    }

    /**
     * @throws ReflectionException
     */
    public static function create(array $controllers, Container $container): null|static
    {
        $cls = static::class;
        if (!isset(self::$instances[$cls])) {
            self::$instances[$cls] = new static($controllers, $container);
        }

        return self::$instances[$cls];
    }

    /**
     * @return mixed
     * @throws Exception
     */
    public function __wakeup()
    {
        throw new Exception("Cannot un-serialize a singleton.");
    }

    public function post(string $uri, $action): void
    {
        $this->post[$uri] = $action;
    }

    public function put(string $uri, $action): void
    {
        $this->put[$uri] = $action;
    }

    public function patch(string $uri, $action): void
    {
        $this->patch[$uri] = $action;
    }

    public function delete(string $uri, $action): void
    {
        $this->delete[$uri] = $action;
    }

    /**
     * @throws Throwable
     */
    public function direct(): mixed
    {
        // figure out route and method
        $route = explode('?', $_SERVER['REQUEST_URI'])[0];
        $requestMethod = strtolower($_SERVER['REQUEST_METHOD']);

        // check if route exists and if not send 404 page
        if ($this->routeDoesntExist($route, $requestMethod)) {
            throw new PageNotFoundRouterException();
        }

        // if closure, execute it
        /** @var array $requestMethod */
        $action = $this->$requestMethod[$route];

        // redirect to controller method
        $controllerMethod = $this->resolveMethod($action);
        $controller = $this->resolveController($action);
        return $this->container->get($controller)->$controllerMethod();
    }

    private function routeDoesntExist(string $route, string $requestMethod): bool
    {
        return !in_array($route, array_keys($this->$requestMethod));
    }

    private function resolveMethod($action): string
    {
        return explode('@', $action)[1];
    }

    /**
     * @param $action
     * @return string
     */
    private function resolveController($action): string
    {
        return explode('@', $action)[0];
    }

    public function get(string $uri, $action): void
    {
        $this->get[$uri] = $action;
    }

    /**
     * Singletons should not be cloneable.
     */
    protected function __clone()
    {
    }
}
