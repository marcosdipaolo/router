<?php

namespace MDP\Middleware;

use MDP\Http\Request;
use MDP\Http\Response;

class SecurityHeadersMiddleware implements MiddlewareInterface
{
    public function handle(Request $request, Response $response, callable $next): Response
    {
        $response->addSecurityHeaders();
        return $next($request, $response);
    }
}
