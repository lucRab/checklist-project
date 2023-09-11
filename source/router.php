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
        "/checklist/perfil" => fn() => load('LoadPages', 'perfilPage'),
        "/checklist/criar" => fn() => load('LoadPages', 'criarPage')
        
    ],
    'POST' => [
        "/checklist/" => fn() => load('LoadPages', 'loginPage'),
        "/checklist/home" => fn() => load('LoadPages', 'homePage'),
        "/checklist/token/cadastro" => fn() => load('UsuarioController', 'createUser'),
        "/checklist/token" => fn() => load('UsuarioController','loginUser'),
        "/checklist/atualizar" => fn() => load('UsuarioController','updateUser'),
        "/checklist/perfil" => fn() => load('LoadPages', 'perfilPage'),
        "/checklist/auth" => fn() => load('UsuarioController', 'authToken'),
        "/checklist/criar" => fn() => load('LoadPages', 'criarPage'),
        "/checklist/checklistcreate" => fn() => load('ChecklistController', 'createChecklist')
    ]
];