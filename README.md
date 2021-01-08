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
A the entrypoint of the application: 
```php
<?php
require __DIR__ . '/vendor/autoload.php';

use MDP\Router\RouterConfiguration;
use MDP\Router\Router;

// create a RouterConfiguration instance
$config = new RouterConfiguration();
// set the absolute path of the routes file
$config->setRoutesFilePath(__DIR__ . '/routes.php');
// create the Router instance
$router = Router::create($config);
// direct the request to the rigth place
$router->direct();
```

### Routes file
The routes file returns an associative array with the different http verbs as keys. Each of these keys are assigned an array of arrays, where each of those arrays contains two string elements, the first is the uri, and the second a string with the controller and the method joined by an `@`: `controller@method`.   
If this second argument is a closure, the Router will execute it.
```php
<?php
return [
    "get" => [
        ['/', 'PageController@index'],
        ['/mail', 'PageController@mail'],
        ['/login', 'AuthController@loginForm'],
        ['/register', 'UserController@registerForm'],
        ['/logout', 'AuthController@logout'],
        ['/about', 'PageController@about'],
        ['/health', function(){
            return 'I\'m healthy as a dog running backwards' ;
        }]
    ],
    "post" => [
        ['/mail', 'MailController@mail'],
        ['/register', 'UserController@register'],
        ['/login', 'AuthController@login']
    ],
];
```