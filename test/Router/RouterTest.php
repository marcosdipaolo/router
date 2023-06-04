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

    /**
     * @return Container
     */
    private function getContainer(): Container
    {
        $container = new Container();
        $container->set(MockedServiceApi::class, MockedService::class);
        return $container;
    }

    /**
     * @return RouterConfiguration
     */
    private function getRouterConfig(): RouterConfiguration
    {
        $config = new RouterConfiguration();
        $config->setRoutesFilePath(__DIR__ . '/mockedRoutes.php');
        $config->setControllersNamespace("MDP\\Test\\Router");
        return $config;
    }
}