<?php

namespace MDP\Router;

class RouteDefinition
{
    /** @var array<int, string> */
    private array $parameters = [];

    /**
     * @param array<int, string|\MDP\Middleware\MiddlewareInterface> $middleware
     */
    public function __construct(
        private readonly string $method,
        private readonly string $path,
        private readonly string $action,
        private readonly array $middleware = [],
        private readonly ?string $name = null
    ) {
        $this->extractParameters();
    }

    /**
     * Extract parameter names from path like /users/{id}
     */
    private function extractParameters(): void
    {
        preg_match_all('/\{(\w+)\}/', $this->path, $matches);
        $this->parameters = $matches[1];
    }

    public function getMethod(): string
    {
        return $this->method;
    }

    public function getPath(): string
    {
        return $this->path;
    }

    public function getAction(): string
    {
        return $this->action;
    }

    /** @return array<int, string|\MDP\Middleware\MiddlewareInterface> */
    public function getMiddleware(): array
    {
        return $this->middleware;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    /** @return array<int, string> */
    public function getParameters(): array
    {
        return $this->parameters;
    }

    /**
     * Convert path to regex pattern for matching
     * /users/{id} becomes /users/(\d+) or /users/([^/]+) based on requirements
     */
    public function toRegexPattern(): string
    {
        // Use # as delimiter to avoid escaping forward slashes
        $pattern = preg_quote($this->path, '#');
        $pattern = preg_replace_callback('/\\\{(\w+)\\\}/', fn($matches) => '(?P<' . $matches[1] . '>[^/]+)', $pattern);
        return '#^' . $pattern . '$#';
    }

    /**
     * Check if this route matches the given method and path
     *
     * @return array<string, string>|null
     */
    public function matches(string $method, string $path): ?array
    {
        if ($this->method !== $method) {
            return null;
        }

        $pattern = $this->toRegexPattern();
        if (preg_match($pattern, $path, $matches)) {
            // Extract only the named parameters
            $params = [];
            foreach ($this->parameters as $param) {
                if (isset($matches[$param])) {
                    $params[$param] = $matches[$param];
                }
            }

            return $params;
        }

        return null;
    }

    /**
     * @return array{method: string, path: string, action: string, middleware: array<int, string|\MDP\Middleware\MiddlewareInterface>, name: string|null, parameters: array<int, string>}
     */
    public function toArray(): array
    {
        return [
            'method' => $this->method,
            'path' => $this->path,
            'action' => $this->action,
            'middleware' => $this->middleware,
            'name' => $this->name,
            'parameters' => $this->parameters,
        ];
    }
}

