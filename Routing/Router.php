<?php

class Router
{
    public function execute($request)
    {
        global $config;
        
        if (isset($config['routes'][$request]))
        {
            $data = explode(':', $config['routes'][$request]);
            $controller_name = $data[0].'Controller';
            $method_name = $data[1].'Action';
            
            require_once('Controller/'.$controller_name.'.php');
            $controller = new $controller_name;
            $response = call_user_func([$controller, $method_name]);
            
            return $response;
        }
        else
        {
            header("HTTP/1.0 404 Not Found");
            exit();
        }
    }
}
