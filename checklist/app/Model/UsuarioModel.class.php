<?php
namespace App\Model;
/**
 *  Classse model responsavel pelos dados do usuario
 * @author Lucas Rabelo <lucasrabelo186@gmail.com>
 * @version ${2:2.0.0
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
     * @return true ou @return Exception
     */
    public function createUser($name, $senha, $email, $username) {
   //Código do método

      //Executa um metodo da classe Conexao
      $conexao = \App\Model\Conexao::conectar(); 
        //Verifica se a conexão retorna um obejo mysqli
      if(get_class($conexao) == "mysqli") {
         //SQl para inserir no banco de dados
            $createUser = $conexao-> prepare("INSERT usuario ( ` nome`, `senha`, `email`, `username`) VALUES (?,?,?,?)");
            $createUser->bind_param("ssss", $name, $senha, $email, $username);   
            try { 
               //Verica se tem como executar o sql;
              if ($createUser->execute()) {
               //caso execute retorna true;
                  return true;
              } else {
               //caso não execute abre uma execeção
                  throw new Exception("[ATENÇÃO]");
              }
               //se conseguir executar retorna true
            }catch (Exception $e) {
               //var_dump($e);
               //retorna a execeção caso não consiga executar o sql
               return $e->getMessage();
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