<?php
namespace App\controller;
use PDO;
use Dotenv\Dotenv;
use Firebase\JWT\JWT;
use App\model\UsuarioModel;
use Firebase\JWT\Key;
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
            echo json_encode('Este usuario já existe');
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
            echo json_encode('Usuario incorreto');
            die;
        }
        if($senha !== $userFoud['senha']) {
            http_response_code(401);
            echo json_encode('Senha incorreta');
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

    public function authToken(){
        $dotenv = Dotenv::createImmutable(dirname(__FILE__, 3));
        $dotenv->load();

        $dataRequest = getallheaders();
        $authorization = $dataRequest['Authorization'];
        $token = str_replace('Bearer','',$authorization);
        
        try{
            $decoded = JWT::decode($token, new Key($_ENV['KEY'], 'HS256'));
            if (empty($_SESSION)) {
                $_SESSION['username'] = $decoded->username;
                $_SESSION['id'] = $decoded->id;
            }
        } catch(\Throwable $e) {
            http_response_code(401);
            echo json_encode($e->getMessage());
        }

    }
    public static function getUser($data) {

        $get = UsuarioModel::getAll($data);
        return $get;
    }

    public function updateUser() {
        $dotenv = Dotenv::createImmutable(dirname(__FILE__, 3));
        $dotenv->load();

        $dataRequest = json_decode(file_get_contents('php://input'), true);
        

        $data = new \stdClass;
        $data->nome = $dataRequest['name'];
        $data->username = $dataRequest['user'];
        $data->email = $dataRequest['email'];
        $data->senha = $dataRequest['senha'];
        $data->id = $_SESSION['id'];

        $update = UsuarioModel::updateUsuario($data);
        echo json_encode("Deu certo?");
    }

    public static function getChecklist($idusuario) {

        $get = UsuarioModel::getChecklistUser($idusuario);
        return $get;
    }
}
