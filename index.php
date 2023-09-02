<?php

require "vendor/autoload.php";
require "source/router.php";
require "app/Model/UsuarioModel.php";

session_start();

try {
    
    $request = $_SERVER["REQUEST_METHOD"];
    
    if(!isset($routes[$request])){
        throw new Exception("A rota não exite");
    }
    if(!array_key_exists(URI, $routes[$request])){
       throw new Exception("teste"); 
    }

    $controller = $routes[$request][URI];
    $controller();
} catch(Exception $e) {
    echo $e->getMessage();
}