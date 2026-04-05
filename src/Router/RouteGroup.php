<?php

namespace MDP\Router;

class RouteGroup
{
    private readonly string $prefix;

    /**
     * @param array<int, string|\MDP\Middleware\MiddlewareInterface> $middleware
     */
    public function __construct(private readonly RouteCollection $collection, string $prefix, private readonly array $middleware = [])
    {
        $this->prefix = rtrim($prefix, '/');
    }

    /**
     * @param array<int, string|\MDP\Middleware\MiddlewareInterface> $middleware
     */
    public function get(string $path, string $action, array $middleware = [], ?string $name = null): RouteDefinition
    {
        return $this->collection->get(
            $this->prefix . $path,
            $action,
            array_merge($this->middleware, $middleware),
            $name
        );
    }

    /**
     * @param array<int, string|\MDP\Middleware\MiddlewareInterface> $middleware
     */
    public function post(string $path, string $action, array $middleware = [], ?string $name = null): RouteDefinition
    {
        return $this->collection->post(
            $this->prefix . $path,
            $action,
            array_merge($this->middleware, $middleware),
            $name
        );
    }

    /**
     * @param array<int, string|\MDP\Middleware\MiddlewareInterface> $middleware
     */
    public function put(string $path, string $action, array $middleware = [], ?string $name = null): RouteDefinition
    {
        return $this->collection->put(
            $this->prefix . $path,
            $action,
            array_merge($this->middleware, $middleware),
            $name
        );
    }

    /**
     * @param array<int, string|\MDP\Middleware\MiddlewareInterface> $middleware
     */
    public function patch(string $path, string $action, array $middleware = [], ?string $name = null): RouteDefinition
    {
        return $this->collection->patch(
            $this->prefix . $path,
            $action,
            array_merge($this->middleware, $middleware),
            $name
        );
    }

    /**
     * @param array<int, string|\MDP\Middleware\MiddlewareInterface> $middleware
     */
    public function delete(string $path, string $action, array $middleware = [], ?string $name = null): RouteDefinition
    {
        return $this->collection->delete(
            $this->prefix . $path,
            $action,
            array_merge($this->middleware, $middleware),
            $name
        );
    }

    /**
     * @param array<int, string|\MDP\Middleware\MiddlewareInterface> $middleware
     */
    public function head(string $path, string $action, array $middleware = [], ?string $name = null): RouteDefinition
    {
        return $this->collection->head(
            $this->prefix . $path,
            $action,
            array_merge($this->middleware, $middleware),
            $name
        );
    }

    /**
     * @param array<int, string|\MDP\Middleware\MiddlewareInterface> $middleware
     */
    public function options(string $path, string $action, array $middleware = [], ?string $name = null): RouteDefinition
    {
        return $this->collection->options(
            $this->prefix . $path,
            $action,
            array_merge($this->middleware, $middleware),
            $name
        );
    }
}
