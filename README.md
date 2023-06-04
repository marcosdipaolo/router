# Router

### A PHP Router Package
####
### Basic Concepts
####
A router package is a utility that, once all http requests are redirected to an entry point, can configure and organize those requests with an -- easy to understand -- and friendly interface.

For example, given the following `.htaccess` file:
```apacheconf
RewriteEngine on
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_URI} !\.(?:css|js|jpe?g|gif|png)$ [NC]
RewriteRule ^(.*)$ index.php?q=$1 [L,QSA]
```
where all requests (except the one importing images, css or js scripts) are redirected to an `index.php` file located at the project's root directory, all requests are bottle-necked to an entry point, so then you can use the `Router` to make you life easier. 

### Usage
#### A the entrypoint of the application: 
```php
require __DIR__ . '/vendor/autoload.php';

// instantiate the container
$container = new MDP\Container\Container();

// bind whatever you need
$container->set(
    MyAbstract::class, 
    MyConcrete::class
);

// create the Router instance passing the controllers and the container
$router = Router::create([ControllerClasses::class], $container);

// direct the request to the rigth place
$router->direct();
```
#### At the controllers
```php
<?php

namespace MDP\Test\Router;

use MDP\Test\Router\MockedService\MockedServiceApi;
use MDP\Router\Attributes\Get;

readonly class ControllerClass
{
    public function __construct(private MyAbstract $service)
    {
        //
    }

    // We decorate methods with Verb Attributes
    #[Get("/")]
    public function mockMethod(): bool
    {
        return true;
    }
}
```