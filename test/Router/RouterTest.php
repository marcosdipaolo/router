<?php

namespace MDP\Test\Router;

use MDP\Container\Container;
use MDP\Router\Router;
use MDP\Router\RouterConfiguration;
use MDP\Test\Router\MockedService\MockedService;
use MDP\Test\Router\MockedService\MockedServiceApi;
use PHPUnit\Framework\TestCase;
use Throwable;

class RouterTest extends TestCase
{
    private Router $router;

    /**
     * @param string|null $name
     * @param array $data
     * @param string $dataName
     * @throws Throwable
     */
    public function __construct(?string $name = null, array $data = [], string $dataName = '')
    {
        parent::__construct($name, $data, $dataName);

        $this->router = Router::create(
            [MockedController::class],
            $this->getContainer());
    }

    /**
     * @throws Throwable
     */
    public function testOne()
    {
        $_SERVER["REQUEST_URI"] = "/";
        $_SERVER["REQUEST_METHOD"] = "GET";
        $this->assertTrue($this->router->direct());
    }

    private function getContainer(): Container
    {
        $container = new Container();
        $container->set(MockedServiceApi::class, MockedService::class);
        return $container;
    }
}