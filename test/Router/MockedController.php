<?php

namespace MDP\Test\Router;

use MDP\Http\Request;
use MDP\Http\Response;
use MDP\Router\Attributes\Delete;
use MDP\Router\Attributes\Get;
use MDP\Router\Attributes\Patch;
use MDP\Router\Attributes\Post;
use MDP\Router\Attributes\Put;
use MDP\Test\Router\MockedService\MockedServiceApi;

readonly class MockedController
{
    public function __construct(private MockedServiceApi $service)
    {
    }

    #[Get("/")]
    public function home(Request $request, Response $response): Response
    {
        return $response->json(['message' => 'Home']);
    }

    #[Get("/users/{id}")]
    public function getUser(Request $request, Response $response): Response
    {
        $id = $request->getRouteParam('id');
        return $response->json(['id' => $id, 'name' => 'User ' . $id]);
    }

    #[Post("/users")]
    public function createUser(Request $request, Response $response): Response
    {
        $data = $request->isJson() ? $request->getJsonBody() : $request->getPostData();
        return $response->setStatusCode(201)->json([
            'id' => 1,
            'created' => true,
            'data' => $data
        ]);
    }

    #[Put("/users/{id}")]
    public function updateUser(Request $request, Response $response): Response
    {
        $id = $request->getRouteParam('id');
        $data = $request->getJsonBody();
        return $response->json(['id' => $id, 'updated' => true, 'data' => $data]);
    }

    #[Patch("/users/{id}")]
    public function patchUser(Request $request, Response $response): Response
    {
        $id = $request->getRouteParam('id');
        $data = $request->getJsonBody();
        return $response->json(['id' => $id, 'patched' => true, 'data' => $data]);
    }

    #[Delete("/users/{id}")]
    public function deleteUser(Request $request, Response $response): Response
    {
        $id = $request->getRouteParam('id');
        return $response->setStatusCode(204);
    }

    #[Get("/search")]
    public function search(Request $request, Response $response): Response
    {
        $q = $request->getQuery('q');
        return $response->json(['query' => $q, 'results' => []]);
    }
}