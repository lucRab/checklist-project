<?php
namespace App\model;
use Core\conexao\Conexao;
use PDO;
require_once "./core/Database.php";
/**
 * Class model resposavel pelos dados dos checklists
 * @author Lucas Rabelp <lucasrabelo@gmail.com>
 * @version ${2:2.0.0
 */
class ChecklistModel {

    public static function createChecklist($data) {
    //Código do método
        //Executa um metodo da classe Conexao
        $conexao = Conexao::conectar();
        //Verifica se a conexão retorna um obejo mysqli
        if(gettype($conexao) == "object") {
            //parametros para execução da query
            $param = ['nome' => $data->nome, 'status' => false,
            'descricao' => $data->descricao, 'idusuario' => $data->id];
            //SQl para inserir no banco de dados
            $insert = $conexao->prepare("INSERT INTO checklist (name, status, descricao, usuario_idusuario) 
            VALUES (:nome, :status, :descricao, :idusuario)");
            try {
                //Tenta executar o sql;
                $insert->execute($param);
               //Captura o id gerado no insert      
                $id = $conexao->lastInsertId();
                return $id;
            }catch(\PDOException $e) {
                return $e->getMessage();
            }
        }else {
            return $conexao;
        }

    }

    public static function updateChecklist($data) {
    //Código do método
        //Executa um metodo da classe Conexao
        $conexao = Conexao::conectar();
        //Verifica se a conexão retorna um obejo mysqli
        if(gettype($conexao) == "object") {
            //parametros para execução da query
            $param = ['nome' => $data->nome, 'status' => $data->status,
            'descricao' => $data->descricao, 'id' => $data->id];
            //SQl para inserir no banco de dados
            $update = $conexao->prepare("UPDATE checklist SET name=:nome, descricao=:descricao,status=:status  WHERE idchecklist=:id");
            try {
                //Tenta executar o sql;
                $update->execute($param);
                return $update;
            }catch(\PDOException $e) {
                return $e->getMessage();
            }
        }else {
            return $conexao;
        }
    }

    public static function  deleteChecklist($data) {
    //Código do método
        //Executa um metodo da classe Conexao
        $conexao = Conexao::conectar();
        //Verifica se a conexão retorna um obejo mysqli
        if(gettype($conexao) == "object") {
            //parametros para execução da query
            $param = [ 'id' => $data->id];
            //SQl para inserir no banco de dados
            $delete = $conexao->prepare("DELETE FROM checklist WHERE idchecklist = :id");
            try {
                //Tenta executar o sql;
                $delete->execute($param);
                return $delete;
            }catch(\PDOException $e) {
                return $e->getMessage();
            }
        }else {
            return $conexao;
        }

    }

    public static function getAll($data) {
        $conexao = Conexao::conectar();
    }
    
    public static function setItem($data) {
    //Código do método
        //Executa um metodo da classe Conexao
        $conexao = Conexao::conectar();
        //Verifica se a conexão retorna um obejo mysqli
        if(gettype($conexao) == "object") {
            //parametros para execução da query
            $param = ['nome' => $data->nome, 'status' => false,
            'descricao' => $data->descricao, 'id' => $data->id];
            //SQl para inserir no banco de dados
            $insert = $conexao->prepare("INSERT INTO item (name, status, descricao, checklist_idchecklist) 
            VALUES (:nome, :status, :descricao, :id)");
            try {
                //Tenta executar o sql;
                $insert->execute($param);
                //Captura o id gerado no insert 
                $id = $conexao->lastInsertId();
                return $id;
            }catch(\PDOException $e) {
                return $e->getMessage();
            }
        }else {
            return $conexao;
        }
    }
}