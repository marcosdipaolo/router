<?php

namespace MDP\Router;

class RouteCollection
{
    /** @var array<int, RouteDefinition> */
    private array $routes = [];

    /**
     * @param array<int, string|\MDP\Middleware\MiddlewareInterface> $middleware
     */
    public function add(string $method, string $path, string $action, array $middleware = [], ?string $name = null): RouteDefinition
    {
        $route = new RouteDefinition($method, $path, $action, $middleware, $name);
        $this->routes[] = $route;
        return $route;
    }

    public function addDefinition(RouteDefinition $route): void
    {
        $this->routes[] = $route;
    }

    /**
     * @param array<int, string|\MDP\Middleware\MiddlewareInterface> $middleware
     */
    public function get(string $path, string $action, array $middleware = [], ?string $name = null): RouteDefinition
    {
        return $this->add('GET', $path, $action, $middleware, $name);
    }

    /**
     * @param array<int, string|\MDP\Middleware\MiddlewareInterface> $middleware
     */
    public function post(string $path, string $action, array $middleware = [], ?string $name = null): RouteDefinition
    {
        return $this->add('POST', $path, $action, $middleware, $name);
    }

    /**
     * @param array<int, string|\MDP\Middleware\MiddlewareInterface> $middleware
     */
    public function put(string $path, string $action, array $middleware = [], ?string $name = null): RouteDefinition
    {
        return $this->add('PUT', $path, $action, $middleware, $name);
    }

    /**
     * @param array<int, string|\MDP\Middleware\MiddlewareInterface> $middleware
     */
    public function patch(string $path, string $action, array $middleware = [], ?string $name = null): RouteDefinition
    {
        return $this->add('PATCH', $path, $action, $middleware, $name);
    }

    /**
     * @param array<int, string|\MDP\Middleware\MiddlewareInterface> $middleware
     */
    public function delete(string $path, string $action, array $middleware = [], ?string $name = null): RouteDefinition
    {
        return $this->add('DELETE', $path, $action, $middleware, $name);
    }

    /**
     * @param array<int, string|\MDP\Middleware\MiddlewareInterface> $middleware
     */
    public function options(string $path, string $action, array $middleware = [], ?string $name = null): RouteDefinition
    {
        return $this->add('OPTIONS', $path, $action, $middleware, $name);
    }

    /**
     * @param array<int, string|\MDP\Middleware\MiddlewareInterface> $middleware
     */
    public function head(string $path, string $action, array $middleware = [], ?string $name = null): RouteDefinition
    {
        return $this->add('HEAD', $path, $action, $middleware, $name);
    }

    /**
     * Group routes under a common prefix and middleware
     *
     * @param array<int, string|\MDP\Middleware\MiddlewareInterface> $groupMiddleware
     */
    public function group(string $prefix, array $groupMiddleware, callable $callback): void
    {
        $groupRouter = new RouteGroup($this, $prefix, $groupMiddleware);
        $callback($groupRouter);
    }

    /** @return array<int, RouteDefinition> */
    public function all(): array
    {
        return $this->routes;
    }

    /** @return array<int, array<mixed, mixed>> */
    public function toArray(): array
    {
        return array_map(fn($route) => $route->toArray(), $this->routes);
    }
}
