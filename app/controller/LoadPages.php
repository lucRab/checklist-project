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

   
    public function loginPage() {
        return Controller::view('login');
    }
    public function cadastroPage() {
        return Controller::view('cadastro');
    }
    public function homePage() {
        return Controller::view('home');
    }
}
