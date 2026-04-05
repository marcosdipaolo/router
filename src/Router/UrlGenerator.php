<?php

namespace MDP\Router;

class UrlGenerator
{
    public function __construct(private readonly RouteCollection $routes, private ?string $basePath = null)
    {
    }

    /**
     * Generate a URL from a route name and parameters
     *
     * @param string $name The route name
     * @param array $parameters Parameters to fill in the route
     * @return string The generated URL
     * @throws \InvalidArgumentException if route is not found
     */
    public function route(string $name, array $parameters = []): string
    {
        $route = $this->findRouteByName($name);

        if (!$route instanceof \MDP\Router\RouteDefinition) {
            throw new \InvalidArgumentException(sprintf("Route '%s' not found", $name));
        }

        $url = $route->getPath();

        // Replace named parameters in the path
        foreach ($parameters as $key => $value) {
            $url = str_replace('{' . $key . '}', $value, $url);
        }

        return $this->basePath . $url;
    }

    /**
     * Find a route by its name
     */
    private function findRouteByName(string $name): ?RouteDefinition
    {
        foreach ($this->routes->all() as $route) {
            if ($route->getName() === $name) {
                return $route;
            }
        }

        return null;
    }

    /**
     * Set the base path for URL generation
     */
    public function setBasePath(?string $basePath): self
    {
        $this->basePath = $basePath;
        return $this;
    }

    public function getBasePath(): ?string
    {
        return $this->basePath;
    }
}
