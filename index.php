<?php

require_once('config/config.php');
require_once('Routing/Router.php');

$request = empty($_GET['action']) ? $config['homepage_route'] : $_GET['action'];
$router = new Router();
$response = $router->execute($request);
echo $response;
