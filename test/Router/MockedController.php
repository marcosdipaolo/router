<?php

namespace MDP\Test\Router;

use MDP\Test\Router\MockedService\MockedServiceApi;
use MDP\Router\Attributes\Get;

readonly class MockedController
{
    public function __construct(private MockedServiceApi $service)
    {
        var_dump($this->service);
    }

    #[Get("/")]
    public function mockMethod(): bool
    {
        return true;
    }
}