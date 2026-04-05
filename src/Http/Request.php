<?php

namespace MDP\Http;

class Request
{
    private readonly string $method;

    private readonly string $uri;

    /** @var array<string, mixed> */
    private array $queryParams;

    /** @var array<string, mixed> */
    private array $postData;

    /** @var array<string, mixed> */
    private array $routeParams = [];

    /** @var array<string, mixed> */
    private array $headers = [];

    private readonly string $body;

    /**
     * @param array<string, mixed>|null $queryParams
     * @param array<string, mixed>|null $postData
     * @param array<string, mixed>|null $headers
     */
    public function __construct(
        ?string $method = null,
        ?string $uri = null,
        ?array $queryParams = null,
        ?array $postData = null,
        ?array $headers = null,
        ?string $body = null
    ) {
        $this->method = $method ?? (string) ($_SERVER['REQUEST_METHOD'] ?? 'GET');
        $this->uri = $uri ?? (string) (parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/');
        $this->queryParams = $queryParams ?? ($_GET ?? []);
        $this->postData = $postData ?? ($_POST ?? []);
        $this->headers = $headers ?? $this->parseHeaders();
        $this->body = $body ?? (file_get_contents('php://input') ?: '');
    }

    /**
     * Parse headers from $_SERVER superglobal
     * @return array<string, mixed>
     */
    private function parseHeaders(): array
    {
        $headers = [];
        foreach ($_SERVER as $key => $value) {
            if (str_starts_with($key, 'HTTP_')) {
                $header = substr($key, 5);
                $headers[$header] = $value;
            }
        }

        return $headers;
    }

    public function getMethod(): string
    {
        return $this->method;
    }

    public function getUri(): string
    {
        return $this->uri;
    }

    /** @return array<string, mixed> */
    public function getQueryParams(): array
    {
        return $this->queryParams;
    }

    public function getQuery(string $key, mixed $default = null): mixed
    {
        return $this->queryParams[$key] ?? $default;
    }

    /** @return array<string, mixed> */
    public function getPostData(): array
    {
        return $this->postData;
    }

    public function getPost(string $key, mixed $default = null): mixed
    {
        return $this->postData[$key] ?? $default;
    }

    /** @return array<string, mixed> */
    public function getRouteParams(): array
    {
        return $this->routeParams;
    }

    public function getRouteParam(string $key, mixed $default = null): mixed
    {
        return $this->routeParams[$key] ?? $default;
    }

    /** @param array<string, mixed> $params */
    public function setRouteParams(array $params): void
    {
        $this->routeParams = $params;
    }

    public function getBody(): string
    {
        return $this->body;
    }

    /** @return array<string, mixed> */
    public function getJsonBody(): array
    {
        $decoded = json_decode($this->body, true);
        return is_array($decoded) ? $decoded : [];
    }

    public function getHeader(string $key, mixed $default = null): mixed
    {
        $key = strtoupper($key);
        return $this->headers[$key] ?? $default;
    }

    /** @return array<string, mixed> */
    public function getHeaders(): array
    {
        return $this->headers;
    }

    public function isJson(): bool
    {
        $contentType = $this->getHeader('content-type', '');
        return str_contains((string) $contentType, 'application/json');
    }

    public function isAjax(): bool
    {
        return strtolower((string) $this->getHeader('x-requested-with', '')) === 'xmlhttprequest';
    }

    public function getIP(): string
    {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            return (string) $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            return explode(',', (string) $_SERVER['HTTP_X_FORWARDED_FOR'])[0];
        }

        return (string) ($_SERVER['REMOTE_ADDR'] ?? '');
    }
}
