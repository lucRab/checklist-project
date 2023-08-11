<?php
namespace App\controller;
use PDO;
use Dotenv\Dotenv;
use Firebase\JWT\JWT;
use App\model\UsuarioModel;
/**
 * Classe responsavel pelos requerimento dos usuarios
 * @author Lucas Rabelo <lucasrabelo186@gmail.com>
 * @version ${1.0.0}
 */
class UsuarioController {

    /**
     * Classe responsavel pela criação do usuario e do token
     * @return token
     */
    public function createUser() {
        $dotenv = Dotenv::createImmutable(dirname(__FILE__, 3));
        $dotenv->load();
        //recebe os dados do formulario
        $dataRequest = json_decode(file_get_contents('php://input'), true);
        //instancia uma stdclass e posiciona os dados nela
        $data = new \stdClass;
        $data->username = $dataRequest['user'];
        $data->nome = $dataRequest['nome'];
        $data->senha = $dataRequest['senha'];
        $data->email = $dataRequest['email'];
        //metodo para ferificar se já existe aquele usuario
        $get = UsuarioModel::getUsername($data->username);
        //verifica se já existe aquele usuario
        if($get->fetch()){
            //retorna um erro 401 caso exista
            http_response_code(401);
            die;
        }
       //metodo para criar um usuario
        $create = UsuarioModel::createUser($data);
        //verifica se o usuario foi criado
        if(gettype($create) == 'integer') {
            //cria o payload do token
            $payload = [
                'exp' => time() + 100000,
                'iat' => time(),
                'username' => $data->username,
                'id' => $create
            ];
        }
        //metodo para cria o token
        $encode = JWT::encode($payload,$_ENV['KEY'],'HS256');
        //retorna o token
        echo json_encode($encode);
    }
    /**
     * Classe responsavel pelo login do usuario
     * @return token
     */
    public function loginUser() {

        $dotenv = Dotenv::createImmutable(dirname(__FILE__, 3));
        $dotenv->load();

        $dataRequest = json_decode(file_get_contents('php://input'), true);

        $user = $dataRequest['user'];
        $senha = $dataRequest['senha'];

        $get = UsuarioModel::getUsername($user);
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
            'exp' => time() + 100000,
            'iat' => time(),
            'username' => $user,
            'id' => $userFoud['idusuario']
        ];

        $encode = JWT::encode($payload,$_ENV['KEY'],'HS256');
        echo json_encode($encode);
    }
}
