<?php

class Router
{
    public function execute($action)
    {
        global $config;
        
        if (isset($config['routes'][$action]))
        {
            echo "Action : " . $action;
            $data = explode(':', $config['routes'][$action]);
            $controller = $data[0];
            $method = $data[1];
            
            // TODO : call method $method in Controller $controller
        }
        else
        {
            header("HTTP/1.0 404 Not Found");
        }
    }
}
