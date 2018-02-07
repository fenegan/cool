<?php

$config = [
    'homepage_route' => 'home',
    'db' => [
        'name'     => 'cool',
        'user'     => 'puck',
        'password' => 'toto42'
    ],
    'routes' => [
        'home'    => 'Main:home',
        'contact' => 'Main:contact',
        'register'=> 'User:register',
        'login'   => 'User:login',
        'logout'  => 'User:logout',
    ]
];
