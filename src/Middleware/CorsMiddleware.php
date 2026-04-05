<?php

namespace MDP\Middleware;

use MDP\Http\Request;
use MDP\Http\Response;

class CorsMiddleware implements MiddlewareInterface
{
    /**
     * @param array<int, string> $allowMethods
     * @param array<int, string> $allowHeaders
     */
    public function __construct(
        private readonly string $allowOrigin = '*',
        private readonly array $allowMethods = ['GET', 'POST', 'PUT', 'DELETE', 'PATCH', 'OPTIONS'],
        private readonly array $allowHeaders = ['Content-Type', 'Authorization']
    ) {
    }

    public function handle(Request $request, Response $response, callable $next): Response
    {
        // Handle preflight requests
        if ($request->getMethod() === 'OPTIONS') {
            return $response
                ->setStatusCode(200)
                ->setHeader('Access-Control-Allow-Origin', $this->allowOrigin)
                ->setHeader('Access-Control-Allow-Methods', implode(', ', $this->allowMethods))
                ->setHeader('Access-Control-Allow-Headers', implode(', ', $this->allowHeaders));
        }

        $response->addCorsHeaders($this->allowOrigin);
        return $next($request, $response);
    }
}
