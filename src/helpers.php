<?php

use League\Container\Container;
use League\Container\ReflectionContainer;
use MDP\Router\AppServiceProvider;

if (!function_exists('app')) {
    function app(): Container
    {
        $app = new Container();
        $app->delegate(new ReflectionContainer);
        $app->addServiceProvider(AppServiceProvider::class);
        return $app;
    }
}
