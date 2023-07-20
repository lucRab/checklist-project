<?php

namespace App\controller;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
/**
 * Classe com a função de carregar as páginas
 * @author lucas <lucasrabelo186@gmail.com>
 * @version ${1:1.0.0
 */
class LoadPages{

    public function __construct($router)
    {
        $this->router = $router;
    }
    public function loginPage($data) {

        session_destroy();
        require_once __DIR__. "/../View/login.php";
    }
}
