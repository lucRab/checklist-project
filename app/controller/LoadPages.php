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

   
    public function loginPage($data) {
        session_destroy();
        return Controller::view('login');
    }
    public function cadastroPage($data) {
        session_destroy();
        return Controller::view('cadastro');
    }
    public function homePage($data) {
        session_destroy();
        return Controller::view('home');
    }
    public function perfilPage($data) {
        session_destroy();
        return Controller::view('perfil');
    }
    public function criarPage($data) {
        session_destroy();
        return Controller::view('checklist');
    }
    public function visualizarPage($data) {
        session_destroy();
        return Controller::view('viewCL');
    }

    public function editarPage($data) {
        session_destroy();
        return Controller::view('editar');
    }
}
