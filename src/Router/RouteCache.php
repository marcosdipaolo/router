<?php

namespace MDP\Router;

class RouteCache
{
    private readonly string $cachePath;

    public function __construct(?string $cachePath = null, private bool $enabled = true)
    {
        $this->cachePath = $cachePath ?? sys_get_temp_dir() . '/mdp_router_cache.php';
    }

    /**
     * Check if cache exists and is valid
     */
    public function has(): bool
    {
        if (!$this->enabled) {
            return false;
        }

        return file_exists($this->cachePath);
    }

    /**
     * Load routes from cache
     * @return array<int, array<int|string, mixed>>|null
     */
    public function load(): ?array
    {
        if (!$this->has()) {
            return null;
        }

        $cached = include $this->cachePath;
        return is_array($cached) ? $cached : null;
    }

    /**
     * Save routes to cache
     */
    public function save(RouteCollection $collection): void
    {
        if (!$this->enabled) {
            return;
        }

        $routes = $collection->toArray();
        $cacheContent = '<?php return ' . var_export($routes, true) . ';';

        $dir = dirname($this->cachePath);
        if (!is_dir($dir)) {
            mkdir($dir, 0755, true);
        }

        file_put_contents($this->cachePath, $cacheContent);
    }

    /**
     * Clear the cache
     */
    public function clear(): void
    {
        if (file_exists($this->cachePath)) {
            unlink($this->cachePath);
        }
    }

    public function setEnabled(bool $enabled): self
    {
        $this->enabled = $enabled;
        return $this;
    }

    public function isEnabled(): bool
    {
        return $this->enabled;
    }
}
