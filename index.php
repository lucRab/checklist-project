<?php

require "vendor/autoload.php";

require "source/router.php";

try {
    $uri = parse_url($_SERVER["REQUEST_URI"])['path'];
    
    $request = $_SERVER["REQUEST_METHOD"];
    
    if(!isset($routes[$request])){
        throw new Exception("A rota não exite");
    }
    if(!array_key_exists($uri, $routes[$request])){
       throw new Exception("teste"); 
    }

    $controller = $routes[$request][$uri];
    $controller();
} catch(Exception $e) {
    echo $e->getMessage();
}