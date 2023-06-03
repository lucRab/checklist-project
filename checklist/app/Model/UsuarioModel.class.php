<?php
namespace App\Model;
/**
 *  Classse model responsavel pelos dados do usuario
 * @author Lucas Rabelo <lucasrabelo186@gmail.com>
 * @version ${1:1.0.0
 */
/** Requerimento do código para fazer conexão com o banco de dados */
 require_once("../../core/Database.php");
 use Exception;

 class UsuarioModel{

    private $idusuario;
    private $nome;
    private $senha;
    private $email;
    private $username;

    /**
     * Função para inserir dados o usuario no banco de dados
     *@param string $nome - nome do usuario
     *@param string $senha - senha do usuario
     *@param string $email - email do usuario
     *@param string $username - nickname do usuario
     * @return true
     */
    public function createUser($name, $senha, $email, $username) {
        //Código do método
      $conexao = \App\Model\Database::conectar();
        
        //var_dump($conexao);
      if(get_class($conexao) == "mysqli") {
            $createUser = $conexao-> prepare("INSERT usuario ( ` nome`, `senha`, `email`, `username`) VALUES (?,?,?,?)");
            $createUser->bind_param("ssss", $name, $senha, $email, $username);   
            try {
               //tenta executar o sql
               $createUser->execute();
               //se conseguir executar retorna true
               return true;
            }catch (\mysqli_sql_exception $e){
               //retorna erro caso não consiga executar o sql
               return ($e->getCode());
            }
      }else {     
         //retorna a conexao como erro de conexao 
         return $conexao;
      }
        
    }
    public function deleteUsuario() {

    }
    public function updateUsuario() {

    }

 }

 $teste = new UsuarioModel();

 $teste->createUsuario("testenome", "senhateste", "emailteste", "nickteste");
 var_dump($teste);
