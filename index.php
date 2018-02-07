<?php

require_once('config/config.php');
require_once('Routing/Router.php');

$action = empty($_GET['action']) ? $config['homepage_route'] : $_GET['action'];
$router = new Router();
$router->execute($action);
