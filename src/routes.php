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

