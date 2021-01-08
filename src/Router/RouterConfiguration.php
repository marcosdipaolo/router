<?php

namespace MDP\Router;

class RouterConfiguration
{
    private $routesFilePath;

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
}
