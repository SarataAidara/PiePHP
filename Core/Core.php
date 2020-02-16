<?php

namespace Core;
use Core\Router;

class Core
{
    public function run()
    {
        include "src/routes.php";
        $route = Router::get();
        $router = new $route['controller'];
        $method = $route['action'];
        $router->$method();
    }
}


