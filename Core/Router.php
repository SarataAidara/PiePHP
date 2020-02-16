<?php

namespace Core;

class Router
{
    private static $routes = [];
    
    public static function connect($url, $route)
    {
        $route['controller'] = "Controller\\" . ucfirst($route['controller']) . 'Controller';
        $route['action'] = $route['action'] . 'Action';
        self::$routes[$url] = $route;


    }
    public static function get()
    {
        $uri = $_SERVER['REQUEST_URI'];
        $url = substr($uri, strlen(BASE_URI) +1);
        
        return self::$routes[$url];
    }
}
