<?php

$config = [
    'homepage_route' => 'home',
    'db' => [
        'name'     => 'babyblog',
        'user'     => 'babyblog',
        'password' => 'toto42',
        'host'     => '127.0.0.1',
        'port'     => NULL
    ],
    'routes' => [
        'home'    => 'Main:home',
        'article' => 'Main:article',
        'contact' => 'Main:contact',
        'addArticle' => 'Main:addArticle',
    ]
];
