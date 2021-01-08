<?php

namespace MDP\Router;

class RouterConfiguration
{
    /** @var string $routesFilePath */
    private $routesFilePath;
    /** @var string $controllersNamespace */
    private $controllersNamespace;

    /**
     * @return mixed
     */
    public function getRoutesFilePath()
    {
        return $this->routesFilePath;
    }

    /**
     * @param mixed $routesFilePath
     */
    public function setRoutesFilePath($routesFilePath): void
    {
        $this->routesFilePath = $routesFilePath;
    }

    /**
     * @return string
     */
    public function getControllersNamespace(): string
    {
        return $this->controllersNamespace;
    }

    /**
     * @param string $controllersNamespace
     */
    public function setControllersNamespace(string $controllersNamespace): void
    {
        $this->controllersNamespace = $controllersNamespace;
    }
}
