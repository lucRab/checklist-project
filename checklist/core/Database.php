<?php
namespace App\Model;
/**
 * Classe para fazer conexão com o banco de dados
 * @author Lucas Rabelo <lucasrabelo186@gmail.com>
 * @version ${1:1.0.0
 */
use Exception;
class Conexao {
  static $conexao;
/**
 * Função para que abre conexão com o banco de dados
 * @return object mysqli ou @return exception
 */
  public static function conectar() {
    //tenta abrir conexão
    try {  
      self:: $conexao = new \mysqli("localhost","root","","mydb");
      //retorna conexão
      return self:: $conexao;   
    }catch (Exception $e) {
      self:: $conexao = $e;
      //retorna o motivo do erro
      return self:: $conexao;
     
    } 

  }
}
