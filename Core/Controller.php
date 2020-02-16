<?php

namespace Core;

class Controller
{
    protected $_render;

    protected function render($view, $scope = []) 
    {
        extract($scope);
        $f = implode(DIRECTORY_SEPARATOR, [dirname(__DIR__), 'src', 'View', 
        preg_replace('/Controller\\\?/', '', 
        basename(get_class($this))), $view]) . '.php';

        if (file_exists($f)) 
        {
            ob_start();
            include($f);
            $view = ob_get_clean();
            ob_start();

            include(implode(DIRECTORY_SEPARATOR, [dirname(__DIR__),
            'src', 'View', 'layout']) . '.php');

            
            $this->_render = ob_get_clean();
        }
    }

    public function __destruct()
    {
         echo $this->_render;
    }
}          