<?php

namespace MDP\Router;

use Exception;
use MDP\Router\Exceptions\PageNotFoundRouterException;
use MDP\Router\Exceptions\RoutesFileNotFoundException;
use Throwable;

/**
 * Class Router
 * @package MDP\Router
 */
class Router
{
    /** @var array $instances */
    private static $instances = [];
    /** @var array $get */
    private $get = [];
    /** @var array $post */
    private $post = [];
    /** @var array $put */
    private $put = [];
    /** @var array $patch */
    private $patch = [];
    /** @var array $delete */
    private $delete = [];
    /** @var string $routesFilePath */
    private $routesFilePath;

    /**
     * Router constructor.
     * @param RouterConfiguration $config
     * @throws RoutesFileNotFoundException
     */
    private function __construct(RouterConfiguration $config)
    {
        if (!$path = $config->getRoutesFilePath()) {
            throw new RoutesFileNotFoundException();
        }
        $this->loadRoutes($path);
    }

    /**
     * @param string $path
     * @throws RoutesFileNotFoundException
     */
    public function loadRoutes(string $path)
    {
        try {
            if (!is_file($path)) {
                throw new RoutesFileNotFoundException();
            }
            $routes = require($path);
            foreach ($routes as $verb => $handlers) {
                foreach ($handlers as $uriHandler) {
                    [$uri, $handler] = $uriHandler;
                    $this->$verb($uri, $handler);
                }
            }
        } catch (Throwable $e) {
            throw new RoutesFileNotFoundException($e->getMessage());
        }
    }

    /**
     * @param RouterConfiguration $config
     * @return mixed|static
     * @throws RoutesFileNotFoundException
     */
    public static function create(RouterConfiguration $config)
    {
        $cls = static::class;
        if (!isset(self::$instances[$cls])) {
            self::$instances[$cls] = new static($config);
        }

        return self::$instances[$cls];
    }

    /**
     * @throws Exception
     */
    public function __wakeup()
    {
        throw new Exception("Cannot unserialize a singleton.");
    }

    /**
     * @param $uri
     * @param $action
     */
    public function get(string $uri, $action): void
    {
        $this->get[$uri] = $action;
    }

    /**
     * @param $uri
     * @param $action
     */
    public function post(string $uri, $action): void
    {
        $this->post[$uri] = $action;
    }

    /**
     * @param $uri
     * @param $action
     */
    public function put(string $uri, $action): void
    {
        $this->put[$uri] = $action;
    }

    /**
     * @param $uri
     * @param $action
     */
    public function patch(string $uri, $action): void
    {
        $this->patch[$uri] = $action;
    }

    /**
     * @param $uri
     * @param $action
     */
    public function delete(string $uri, $action): void
    {
        $this->delete[$uri] = $action;
    }

    /**
     * @return mixed
     * @throws Throwable
     */
    public function direct()
    {
        try {
            // figure out route and method
            $route = explode('?', $_SERVER['REQUEST_URI'])[0];
            $requestMethod = strtolower($_SERVER['REQUEST_METHOD']);

            // check if route exists and if not send 404 page
            if ($this->routeDoesntExist($route, $requestMethod)) {
                throw new PageNotFoundRouterException();
            }

            // if closure, execute it
            $action = $this->$requestMethod[$route];
            if ($action instanceof \Closure) {
                return $action();
            }

            // redirect to controller method
            $controllerMethod = $this->resolveMethod($action);
            $controller = $this->resolveController($action);
            return (new $controller)->$controllerMethod();
        } catch (Throwable $e) {
            throw $e;
        }
    }

    /**
     * @param string $route
     * @param $requestMethod
     * @return bool
     */
    private function routeDoesntExist(string $route, $requestMethod): bool
    {
        return !in_array($route, array_keys($this->$requestMethod));
    }

    /**
     * @param $action
     * @return string
     */
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
        return '\\App\\Http\\Controllers\\' . explode('@', $action)[0];
    }

    /**
     * @param string $routesFilePath
     */
    public function setRoutesFilePath(string $routesFilePath): void
    {
        $this->routesFilePath = $routesFilePath;
    }

    /**
     * Singletons should not be cloneable.
     */
    protected function __clone()
    {
    }
}
