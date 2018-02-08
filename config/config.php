<?php

$config = [
    'homepage_route' => 'home',
    'db' => [
        'name'     => 'babyblog',
        'user'     => 'babyblog',
        'password' => 'toto42'
    ],
    'routes' => [
        'home'    => 'Main:home',
        'article' => 'Main:article',
        'contact' => 'Main:contact',
        'addArticle' => 'Main:addArticle',
    ]
];
