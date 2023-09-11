<?php 
use App\model\UsuarioModel;
require_once('app/Model/UsuarioModel.php');

$idusuario = 20;

$select = UsuarioModel::getidChecklistUser($idusuario);
$teste = $select->fetchALL(PDO::FETCH_OBJ);

var_dump($teste);