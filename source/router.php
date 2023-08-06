<?php
try {
    function load(string $controller, string $action) {
        //se controller existe
        $controllerNamespace = "App\\controller\\{$controller}";
        if(!class_exists($controllerNamespace)) {
            
            throw new Exception("O controller {$controller} não existe");
        }
        $controllerInstance = new $controllerNamespace();
        
        if(!method_exists($controllerInstance, $action)) {
           
            throw new Exception(
                "O método {$action} não existe no controller {$controller}"
            );
           
        }
       
        $controllerInstance->$action((object)$_REQUEST);
    }
} catch(Exception $e) {
    echo $e->getMessage();
}

$routes = [
    'GET' => [
        "/checklist/" => fn() => load('LoadPages', 'loginPage'),
        "/checklist/cadastro" => fn() => load('LoadPages', 'cadastroPage'),
        "/checklist/home" => fn() => load('LoadPages', 'homePage'),
        
    ],
    'POST' => [
        "/checklist/" => fn() => load('LoadPages', 'loginPage'),
        "/checklist/cadastro" => fn() => load('LoadPages', 'cadastroPage'),
        "/checklist/token" => fn() => load('UsuarioController','loginUser')
    ]
];