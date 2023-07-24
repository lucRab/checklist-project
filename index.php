<?php

require __DIR__ ."/vendor/autoload.php";

use CoffeeCode\Router\Router;
use App\controller\LoadPages;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

session_start();

$router = new Router(URL_BASE);

/**
 * Controllers
 */
$router->namespace("App\controller");
/**
 * Login/Cadastro
 */
$router->group("/");
$router->get("/","LoadPages:loginPage");
$router->get("/cadastro","LoadPages:cadastroPage");

/**
 * Erros
 */
$router->group("ooops");
$router->get("/{errcode}", function ($data) {
    echo "<h1>Erro {$data["errcode"]}</h1>";
    var_dump($data);
});

$router->dispatch();

if($router->error()){
    $router->redirect("/ooops/{$router->error()}");
};