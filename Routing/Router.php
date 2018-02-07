<?php

class Router
{
    public function execute($action)
    {
        global $config;
        
        if (isset($config['routes'][$action]))
        {
            $data = explode(':', $config['routes'][$action]);
            $controller_name = $data[0].'Controller';
            $method_name = $data[1].'Action';
            
            require_once('Controller/'.$controller_name.'.php');
            $controller = new $controller_name;
            call_user_func(array($controller, $method_name));
        }
        else
        {
            header("HTTP/1.0 404 Not Found");
        }
    }
}
