<?php

namespace MDP\Http;

class Response
{
    private int $statusCode = 200;

    /** @var array<string, string> */
    private array $headers = [];

    private string $body = '';

    private bool $headersSent = false;

    /** @var array<int, string> */
    private const STATUS_MESSAGES = [
        200 => 'OK',
        201 => 'Created',
        204 => 'No Content',
        301 => 'Moved Permanently',
        302 => 'Found',
        304 => 'Not Modified',
        400 => 'Bad Request',
        401 => 'Unauthorized',
        403 => 'Forbidden',
        404 => 'Not Found',
        405 => 'Method Not Allowed',
        422 => 'Unprocessable Entity',
        500 => 'Internal Server Error',
        501 => 'Not Implemented',
        502 => 'Bad Gateway',
        503 => 'Service Unavailable',
    ];

    public function setStatusCode(int $code): self
    {
        $this->statusCode = $code;
        return $this;
    }

    public function getStatusCode(): int
    {
        return $this->statusCode;
    }

    public function setHeader(string $name, string $value): self
    {
        $this->headers[$name] = $value;
        return $this;
    }

    public function getHeader(string $name): ?string
    {
        return $this->headers[$name] ?? null;
    }

    /** @return array<string, string> */
    public function getHeaders(): array
    {
        return $this->headers;
    }

    /** @param array<mixed, mixed> $data */
    public function json(array $data, ?int $statusCode = null): self
    {
        if ($statusCode !== null) {
            $this->setStatusCode($statusCode);
        } elseif ($this->statusCode === 200) {
            // Only set if status hasn't been explicitly set yet
            $this->setStatusCode(200);
        }

        $this->setHeader('Content-Type', 'application/json');
        $this->body = json_encode($data) ?: '';
        return $this;
    }

    public function text(string $content, ?int $statusCode = null): self
    {
        if ($statusCode !== null) {
            $this->setStatusCode($statusCode);
        } elseif ($this->statusCode === 200) {
            $this->setStatusCode(200);
        }

        $this->setHeader('Content-Type', 'text/plain');
        $this->body = $content;
        return $this;
    }

    public function html(string $content, ?int $statusCode = null): self
    {
        if ($statusCode !== null) {
            $this->setStatusCode($statusCode);
        } elseif ($this->statusCode === 200) {
            $this->setStatusCode(200);
        }

        $this->setHeader('Content-Type', 'text/html; charset=UTF-8');
        $this->body = $content;
        return $this;
    }

    public function setBody(string $body): self
    {
        $this->body = $body;
        return $this;
    }

    public function getBody(): string
    {
        return $this->body;
    }

    public function redirect(string $url, int $statusCode = 302): self
    {
        $this->setStatusCode($statusCode);
        $this->setHeader('Location', $url);
        return $this;
    }

    public function send(): void
    {
        if ($this->headersSent) {
            return;
        }

        http_response_code($this->statusCode);

        foreach ($this->headers as $name => $value) {
            header(sprintf('%s: %s', $name, $value));
        }

        echo $this->body;
        $this->headersSent = true;
    }

    public function addCorsHeaders(string $origin = '*'): self
    {
        $this->setHeader('Access-Control-Allow-Origin', $origin);
        $this->setHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');
        $this->setHeader('Access-Control-Allow-Headers', 'Content-Type, Authorization');
        return $this;
    }

    public function addSecurityHeaders(): self
    {
        $this->setHeader('X-Content-Type-Options', 'nosniff');
        $this->setHeader('X-Frame-Options', 'DENY');
        $this->setHeader('X-XSS-Protection', '1; mode=block');
        $this->setHeader('Referrer-Policy', 'strict-origin-when-cross-origin');
        return $this;
    }
}
