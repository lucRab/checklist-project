<?php

require_once "app/model/UsuarioModel.class.php";
use App\model\UsuarioModel;

$data = new stdClass;
$data->nome = "nometeste";
$data->senha = "senhateste";
$data->email = "teste@gmail.com";
$data->username = "teste";
$data->id = 17;

$teste = UsuarioModel::getAll($data);
$f = $teste->fetchAll(PDO::FETCH_OBJ);
var_dump($f);