# MDP Router

A modern, production-ready PHP router library built with PHP 8.2+ and attribute-based routing. It provides a clean, expressive API for defining routes, handling middleware, and managing HTTP requests and responses.

## Features

- ✨ **Attribute-Based Routing**: Define routes using modern PHP 8 attributes
- 🎯 **Dynamic Route Parameters**: Support for path parameters like `/users/{id}`
- 🔄 **Middleware Pipeline**: Built-in middleware support with global and route-specific middleware
- ⚡ **Route Caching**: Cache compiled routes for optimal performance
- 🌐 **Full HTTP Support**: GET, POST, PUT, PATCH, DELETE, HEAD, OPTIONS
- 🔀 **Route Groups**: Organize related routes under common prefixes and middleware
- 🔗 **Reverse Routing**: Generate URLs from route names and parameters
- 📨 **Method Spoofing**: Support for `_method` parameter to simulate HTTP verbs in forms
- 🛡️ **Security Headers**: Built-in CORS and security header support
- 📝 **Request/Response Objects**: Clean abstractions for HTTP requests and responses
- 🧪 **Comprehensive Testing**: Full test suite for all features

## Installation

```bash
composer require marcosdipaolo/router
```

## Quick Start

### 1. Setup Your Entry Point

Create an `index.php` file at your project root:

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use MDP\Container\Container;
use MDP\Router\Router;

// Create and configure container
$container = new Container();
$container->set(UserRepositoryInterface::class, UserRepository::class);

// Create router with your controllers
$router = Router::create(
    [App\Http\Controllers\UserController::class],
    $container,
    __DIR__ . '/storage/cache', // Cache directory (optional)
    true // Enable caching (optional)
);

// Add global middleware
$router->middleware(MDP\Middleware\SecurityHeadersMiddleware::class);
$router->middleware(MDP\Middleware\CorsMiddleware::class);

// Enable debug mode in development
if (getenv('APP_ENV') === 'development') {
    $router->debug(true);
}

// Handle the request
$response = $router->direct();
$response->send();
```

### 2. Configure Your .htaccess

```apacheconf
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_URI} !\.(?:css|js|jpe?g|gif|png)$ [NC]
RewriteRule ^(.*)$ index.php [L,QSA]
```

### 3. Define Routes in Controllers

```php
<?php
namespace App\Http\Controllers;

use MDP\Http\Request;
use MDP\Http\Response;
use MDP\Router\Attributes\{Get, Post, Put, Patch, Delete};

class UserController
{
    public function __construct(private UserRepository $users)
    {
    }

    #[Get("/users")]
    public function index(Request $request, Response $response): Response
    {
        $users = $this->users->all();
        return $response->json(['data' => $users]);
    }

    #[Get("/users/{id}")]
    public function show(Request $request, Response $response): Response
    {
        $id = $request->getRouteParam('id');
        $user = $this->users->find($id);
        
        if (!$user) {
            return $response->setStatusCode(404)->json(['error' => 'User not found']);
        }
        
        return $response->json(['data' => $user]);
    }

    #[Post("/users")]
    public function store(Request $request, Response $response): Response
    {
        $data = $request->getJsonBody();
        $user = $this->users->create($data);
        return $response->setStatusCode(201)->json(['data' => $user]);
    }

    #[Put("/users/{id}")]
    public function update(Request $request, Response $response): Response
    {
        $id = $request->getRouteParam('id');
        $data = $request->getJsonBody();
        $user = $this->users->update($id, $data);
        return $response->json(['data' => $user]);
    }

    #[Patch("/users/{id}")]
    public function patch(Request $request, Response $response): Response
    {
        $id = $request->getRouteParam('id');
        $data = $request->getJsonBody();
        $user = $this->users->patch($id, $data);
        return $response->json(['data' => $user]);
    }

    #[Delete("/users/{id}")]
    public function destroy(Request $request, Response $response): Response
    {
        $id = $request->getRouteParam('id');
        $this->users->delete($id);
        return $response->setStatusCode(204);
    }
}
```

## Core Concepts

### Request/Response Objects

The router provides clean abstractions for HTTP requests and responses:

```php
// Request object
$request->getMethod();              // HTTP method
$request->getUri();                 // Request URI
$request->getQuery('key');          // Query parameter
$request->getPost('key');           // POST data
$request->getRouteParam('id');      // Route parameter
$request->getJsonBody();            // Parsed JSON body
$request->getHeader('Accept');      // HTTP header
$request->getIP();                  // Client IP
$request->isJson();                 // Check if JSON request
$request->isAjax();                 // Check if AJAX request

// Response object
$response->json(['data' => $user]); // Send JSON
$response->html('<h1>Hello</h1>');  // Send HTML
$response->text('Hello World');     // Send plain text
$response->setStatusCode(201);      // Set HTTP status
$response->setHeader('X-Custom', 'value'); // Set header
$response->redirect('/new/path');   // Redirect
$response->addCorsHeaders();        // Add CORS headers
$response->addSecurityHeaders();    // Add security headers
$response->send();                  // Send response
```

### Route Parameters

Define dynamic routes with parameters:

```php
#[Get("/posts/{id}")]
public function show(Request $request): Response
{
    $id = $request->getRouteParam('id');
    // ...
}

#[Get("/posts/{id}/comments/{commentId}")]
public function showComment(Request $request): Response
{
    $postId = $request->getRouteParam('id');
    $commentId = $request->getRouteParam('commentId');
    // ...
}
```

### Route Groups

Group related routes with common prefixes and middleware:

```php
use MDP\Http\Request;
use MDP\Http\Response;

$router->group('/api', [AuthMiddleware::class], function ($group) {
    $group->get('/users', 'UserController@index');
    $group->post('/users', 'UserController@store');
    
    $group->group('/admin', [AdminMiddleware::class], function ($adminGroup) {
        $adminGroup->get('/stats', 'AdminController@stats');
    });
});
```

### Middleware

Create custom middleware by implementing `MiddlewareInterface`:

```php
use MDP\Http\Request;
use MDP\Http\Response;
use MDP\Middleware\MiddlewareInterface;

class AuthMiddleware implements MiddlewareInterface
{
    public function handle(Request $request, Response $response, callable $next)
    {
        // Check authentication
        if (!$this->isAuthenticated()) {
            return $response->setStatusCode(401)->json(['error' => 'Unauthorized']);
        }
        
        // Pass to next middleware/handler
        return $next($request, $response);
    }
    
    private function isAuthenticated(): bool
    {
        // Implementation
        return true;
    }
}
```

Add middleware globally or per-route:

```php
// Global middleware
$router->middleware(AuthMiddleware::class);

// Per-route middleware
#[Get("/protected")]
public function protected(Request $request, Response $response): Response
{
    // ...
}
```

### Built-in Middleware

#### CORS Middleware

Handle cross-origin requests:

```php
use MDP\Middleware\CorsMiddleware;

$router->middleware(new CorsMiddleware(
    allowOrigin: 'https://example.com',
    allowMethods: ['GET', 'POST', 'PUT', 'DELETE'],
    allowHeaders: ['Content-Type', 'Authorization']
));
```

#### Security Headers Middleware

Add security headers automatically:

```php
use MDP\Middleware\SecurityHeadersMiddleware;

$router->middleware(SecurityHeadersMiddleware::class);
```

#### Method Spoofing Middleware

Allow forms to use PUT/PATCH/DELETE via `_method` parameter:

```php
use MDP\Middleware\MethodSpoofingMiddleware;

$router->middleware(new MethodSpoofingMiddleware('_method'));
```

In your HTML form:
```html
<form method="POST" action="/users/123">
    <input type="hidden" name="_method" value="PUT">
    <input type="text" name="name">
    <button type="submit">Update</button>
</form>
```

### Route Caching

Routes are automatically cached when enabled. This compiles all route definitions into a PHP file for maximum performance:

```php
// Caching is enabled by default
$router = Router::create(
    [UserController::class],
    $container,
    __DIR__ . '/storage/cache',
    true // Enable caching
);

// Clear cache when needed (e.g., after deploying new routes)
$router->clearCache();
```

### Reverse Routing

Generate URLs from route names:

```php
// Define routes with names
$router->group('/api', [], function ($group) {
    $group->get('/users/{id}', 'UserController@show')
        ->setName('users.show');
});

// Generate URL
$url = $router->url()->route('users.show', ['id' => 123]);
// => /api/users/123
```

### Debugging

Enable debug mode to get detailed error information:

```php
if (getenv('APP_ENV') === 'development') {
    $router->debug(true);
}

// List all registered routes
$routes = $router->listRoutes();
foreach ($routes as $route) {
    echo $route['method'] . ' ' . $route['path'] . ' => ' . $route['action'];
}
```

## HTTP Status Codes

Commonly used status codes:

```php
// Success
$response->setStatusCode(200);  // OK
$response->setStatusCode(201);  // Created
$response->setStatusCode(204);  // No Content

// Redirection
$response->setStatusCode(301);  // Moved Permanently
$response->setStatusCode(302);  // Found

// Client Errors
$response->setStatusCode(400);  // Bad Request
$response->setStatusCode(401);  // Unauthorized
$response->setStatusCode(403);  // Forbidden
$response->setStatusCode(404);  // Not Found
$response->setStatusCode(422);  // Unprocessable Entity

// Server Errors
$response->setStatusCode(500);  // Internal Server Error
$response->setStatusCode(503);  // Service Unavailable
```

## Security Best Practices

1. **Always validate input**: Validate and sanitize all user input
2. **Use HTTPS**: Ensure all traffic is encrypted
3. **Add CORS headers**: Only allow trusted origins
4. **Implement authentication**: Protect sensitive routes with middleware
5. **Use prepared statements**: When working with databases
6. **Keep cache directory secret**: Don't expose the cache directory publicly
7. **Enable security headers**: Always include security headers

```php
$router->middleware(SecurityHeadersMiddleware::class);
$router->middleware(new CorsMiddleware('https://yourdomain.com'));
```

## Error Handling

The router provides built-in error handling with debug mode for development:

```php
// In development
$router->debug(true);

// In production
$router->debug(false);
```

Create custom error handling middleware:

```php
class ErrorHandlerMiddleware implements MiddlewareInterface
{
    public function handle(Request $request, Response $response, callable $next)
    {
        try {
            return $next($request, $response);
        } catch (Throwable $e) {
            return $response->setStatusCode(500)->json([
                'error' => 'Internal Server Error',
                'message' => getenv('APP_ENV') === 'development' ? $e->getMessage() : null
            ]);
        }
    }
}
```

## Testing

The router includes comprehensive tests:

```bash
composer test
```

Write your own tests:

```php
use PHPUnit\Framework\TestCase;
use MDP\Http\Request;
use MDP\Http\Response;

class UserControllerTest extends TestCase
{
    public function testGetUser()
    {
        $request = new Request('GET', '/users/123');
        $response = $this->router->direct($request);
        
        $this->assertEquals(200, $response->getStatusCode());
    }
}
```

## Performance Tips

1. **Enable route caching** (production)
2. **Use parameter constraints** in routes
3. **Load only needed controllers** in Router::create()
4. **Cache middleware results** when possible
5. **Use lazy loading** for dependencies in container

## Contributing

Contributions are welcome! Please read [CONTRIBUTING.md](CONTRIBUTING.md) first.

## License

MIT License - see [LICENSE](LICENSE) file
