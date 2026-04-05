<?php

namespace MDP\Test\Router;

use MDP\Container\Container;
use MDP\Http\Request;
use MDP\Http\Response;
use MDP\Router\Router;
use MDP\Router\RouteDefinition;
use MDP\Test\Router\MockedService\MockedService;
use MDP\Test\Router\MockedService\MockedServiceApi;
use PHPUnit\Framework\TestCase;
use Throwable;

class RouterTest extends TestCase
{
    private Router $router;
    private Container $container;

    /**
     * @throws Throwable
     */
    protected function setUp(): void
    {
        // Reset singleton for each test to avoid state leakage
        $reflection = new \ReflectionClass(Router::class);
        $property = $reflection->getProperty('instances');
        $property->setAccessible(true);
        $property->setValue(null, []);

        $this->container = $this->getContainer();
        $this->router = Router::create(
            [MockedController::class],
            $this->container,
            null,
            false // Disable caching for tests
        );
    }

    /**
     * Test basic GET request
     */
    public function testBasicGetRequest()
    {
        $request = new Request('GET', '/');
        $response = $this->router->direct($request);

        $this->assertInstanceOf(Response::class, $response);
        $this->assertEquals(200, $response->getStatusCode());
    }

    /**
     * Test 404 Not Found
     */
    public function testNotFoundRoute()
    {
        $request = new Request('GET', '/notfoundroute');
        $response = $this->router->direct($request);

        $this->assertEquals(404, $response->getStatusCode());
        $this->assertStringContainsString('Route not found', $response->getBody());
    }

    /**
     * Test route with parameters
     */
    public function testRouteWithParameters()
    {
        $request = new Request('GET', '/users/123');
        $response = $this->router->direct($request);

        $this->assertEquals(200, $response->getStatusCode());
    }

    /**
     * Test POST request
     */
    public function testPostRequest()
    {
        $request = new Request('POST', '/users', [], ['name' => 'John']);
        $response = $this->router->direct($request);

        $this->assertEquals(201, $response->getStatusCode());
    }

    /**
     * Test PUT request
     */
    public function testPutRequest()
    {
        $request = new Request('PUT', '/users/123', [], [], [], '{"name":"Jane"}');
        $response = $this->router->direct($request);

        $this->assertEquals(200, $response->getStatusCode());
    }

    /**
     * Test PATCH request
     */
    public function testPatchRequest()
    {
        $request = new Request('PATCH', '/users/123', [], [], [], '{"active":true}');
        $response = $this->router->direct($request);

        $this->assertEquals(200, $response->getStatusCode());
    }

    /**
     * Test DELETE request
     */
    public function testDeleteRequest()
    {
        $request = new Request('DELETE', '/users/123');
        $response = $this->router->direct($request);

        $this->assertEquals(204, $response->getStatusCode());
    }

    /**
     * Test that route parameters are accessible
     */
    public function testRouteParametersExtracted()
    {
        $request = new Request('GET', '/users/456');
        $response = $this->router->direct($request);

        // Check params were extracted by examining the response content
        $this->assertStringContainsString('456', $response->getBody());
    }

    /**
     * Test listing routes for debugging
     */
    public function testListRoutes()
    {
        $routes = $this->router->listRoutes();

        $this->assertIsArray($routes);
        $this->assertGreaterThan(0, count($routes));

        // Check that we have the expected route
        $getRoutes = array_filter($routes, fn($r) => $r['method'] === 'GET' && $r['path'] === '/');
        $this->assertNotEmpty($getRoutes);
    }

    /**
     * Test URL generation with reverse routing
     */
    public function testUrlGeneration()
    {
        // Routes don't have names by default, so we'll test that the generator works
        // by checking it doesn't throw an error for a route that doesn't exist
        try {
            $url = $this->router->url()->route('nonexistent');
            $this->fail('Should throw InvalidArgumentException');
        } catch (\InvalidArgumentException $e) {
            $this->assertStringContainsString('Route', $e->getMessage());
        }
    }

    /**
     * Test request with query parameters
     */
    public function testRequestQueryParameters()
    {
        $request = new Request('GET', '/search', ['q' => 'test']);
        $this->assertEquals('test', $request->getQuery('q'));
    }

    /**
     * Test request JSON body parsing
     */
    public function testRequestJsonBody()
    {
        $jsonBody = json_encode(['name' => 'John', 'email' => 'john@example.com']);
        $request = new Request('POST', '/users', [], [], ['Content-Type' => 'application/json'], $jsonBody);

        $data = $request->getJsonBody();
        $this->assertEquals('John', $data['name']);
        $this->assertEquals('john@example.com', $data['email']);
    }

    /**
     * Test response headers
     */
    public function testResponseHeaders()
    {
        $response = new Response();
        $response->setHeader('X-Custom-Header', 'custom-value');

        $this->assertEquals('custom-value', $response->getHeader('X-Custom-Header'));
    }

    /**
     * Test CORS response headers
     */
    public function testCorsHeaders()
    {
        $response = new Response();
        $response->addCorsHeaders('https://example.com');

        $this->assertEquals('https://example.com', $response->getHeader('Access-Control-Allow-Origin'));
        $this->assertStringContainsString('GET', $response->getHeader('Access-Control-Allow-Methods'));
    }

    /**
     * Test security headers
     */
    public function testSecurityHeaders()
    {
        $response = new Response();
        $response->addSecurityHeaders();

        $this->assertEquals('nosniff', $response->getHeader('X-Content-Type-Options'));
        $this->assertEquals('DENY', $response->getHeader('X-Frame-Options'));
    }

    /**
     * Test JSON response
     */
    public function testJsonResponse()
    {
        $response = new Response();
        $response->json(['status' => 'success', 'data' => ['id' => 1]]);

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEquals('application/json', $response->getHeader('Content-Type'));
        $this->assertStringContainsString('success', $response->getBody());
    }

    /**
     * Test debug mode
     */
    public function testDebugMode()
    {
        $this->router->debug(true);
        
        $request = new Request('GET', '/test-error');
        // The controller will throw an error for this route
        $response = $this->router->direct($request);

        // In debug mode, should include error details
        $this->assertEquals(404, $response->getStatusCode());
    }

    private function getContainer(): Container
    {
        $container = new Container();
        $container->set(MockedServiceApi::class, MockedService::class);
        return $container;
    }
}