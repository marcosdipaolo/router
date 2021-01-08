<?php
return [
    "get" => [
        ['/', 'PageController@home'],
        ['/about', function(){
            echo "<h1>Aboooouutttt!!!!</h1>";
        }],
        ['/health', function(){
            echo 'I\'m healthy as a dog running backwards' ;
        }]
    ],
    "post" => [
        ['/mail', 'MailController@mail'],
        ['/register', 'UserController@register'],
        ['/login', 'AuthController@login']
    ],
];