<?php

namespace MDP\Middleware;

use MDP\Http\Request;
use MDP\Http\Response;

class MethodSpoofingMiddleware implements MiddlewareInterface
{
    public function __construct(private readonly string $parameterName = '_method')
    {
    }

    public function handle(Request $request, Response $response, callable $next): Response
    {
        // Only check POST requests
        if ($request->getMethod() === 'POST') {
            /** @var string|null $method */
            $method = $request->getPost($this->parameterName);
            if ($method && in_array(strtoupper((string) $method), ['PUT', 'PATCH', 'DELETE'], true)) {
                // Override the method via reflection
                $reflectionMethod = new \ReflectionProperty($request, 'method');
                $reflectionMethod->setAccessible(true);
                $reflectionMethod->setValue($request, strtoupper((string) $method));
            }
        }

        return $next($request, $response);
    }
}
