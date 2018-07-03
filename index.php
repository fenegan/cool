<?php
require_once('autoload.php');
require_once('vendor/autoload.php');

use Symfony\Component\Yaml\Yaml;
use Routing\Router;

$config = Yaml::parseFile('config/config.yml');
$params = Yaml::parseFile('config/parameters.yml');

$loader = new Twig_Loader_Filesystem('views');
$twig = new Twig_Environment($loader, array(
    //'cache' => 'cache/twig',
    // 'debug' => true,
    'cache' => false,
));
$twig->addExtension(new Twig_Extension_Debug());

$request = substr($_SERVER['REQUEST_URI'], 1);
$request = explode('?', $request)[0];
if (substr($request, -1) == '/')
{
    $request = substr($request, 0, -1);
}
if ($request == '') {
    $request = '/';
}

$router = new Router();

$response = $router->execute($request);
echo $response;
