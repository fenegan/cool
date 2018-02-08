<?php

$config = [
    'homepage_route' => 'home',
    'db' => [
        'name'     => 'babyblog',
        'user'     => 'root',
        'password' => ''
    ],
    'routes' => [
        'home'    => 'Main:home',
        'article' => 'Main:article',
        'contact' => 'Main:contact',
    ]
];
