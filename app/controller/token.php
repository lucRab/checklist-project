<?php

require ('../../vendor/autoload.php');
require('../Model/UsuarioModel.php');

use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use App\model\UsuarioModel;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(dirname(__FILE__, 3));
$dotenv->load();

$dataRequest = json_decode(file_get_contents('php://input'), true);

$user = $dataRequest['user'];
$senha = $dataRequest['senha'];

$data = new stdClass;
$data->username = $user;

$get = UsuarioModel::getUsername($data);
$userFoud = $get->fetch();
if(!$userFoud) {
    http_response_code(401);
    die;
}
if($senha !== $userFoud['senha']) {
    http_response_code(401);
    die;
}

$payload = [
    'exp' => time() + 10,
    'iat' => time(),
    'username' => $data->username
];

$encode = JWT::encode($payload,$_ENV['KEY'],'HS256');
echo json_encode($encode);