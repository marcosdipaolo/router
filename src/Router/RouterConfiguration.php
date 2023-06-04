<?php

namespace MDP\Router;

class RouterConfiguration
{
    private string $routesFilePath;
    private string $controllersNamespace;

    public function getRoutesFilePath(): string
    {
        return $this->routesFilePath;
    }

    public function setRoutesFilePath($routesFilePath): void
    {
        $this->routesFilePath = $routesFilePath;
    }

    public function getControllersNamespace(): string
    {
        return $this->controllersNamespace;
    }

    public function setControllersNamespace(string $controllersNamespace): void
    {
        $this->controllersNamespace = $controllersNamespace;
    }
}
