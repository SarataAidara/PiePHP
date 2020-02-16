<?php

spl_autoload_register(function($className){

    $path = [
    
        "Core" => "Core",
        "Controller" => "src/Controller",
        "Model" => "src/Model",
        "View" => "src/View"
    ];
$namespace = explode("\\", $className)[0];
$class = explode('\\', $className)[1];
require('./' .$path[$namespace] . "/" . $class . '.php');


});








