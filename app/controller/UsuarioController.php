<?php
namespace App\controller;
use PDO;
use Dotenv\Dotenv;
use Firebase\JWT\JWT;
use App\model\UsuarioModel;
class UsuarioController {
   
    public function createUser() {

    } 
    public function loginUser() {

        $dotenv = Dotenv::createImmutable(dirname(__FILE__, 3));
        $dotenv->load();

        $dataRequest = json_decode(file_get_contents('php://input'), true);

        $user = $dataRequest['user'];
        $senha = $dataRequest['senha'];

        $data = new \stdClass;
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
    }
}
