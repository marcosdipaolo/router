<?php

namespace MDP\Middleware;

use MDP\Http\Request;
use MDP\Http\Response;

interface MiddlewareInterface
{
    /**
     * Handle the request and pass control to the next middleware
     *
     * @param callable(Request, Response): Response $next
     */
    public function handle(Request $request, Response $response, callable $next): Response;
}
