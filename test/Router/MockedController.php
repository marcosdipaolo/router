<?php

namespace MDP\Test\Router;

use MDP\Test\Router\MockedService\MockedServiceApi;

class MockedController
{
    public function __construct(private MockedServiceApi $service)
    {
        var_dump($this->service);
    }

    /**
     * @return bool
     */
    public function mockMethod(): bool
    {
        return true;
    }
}