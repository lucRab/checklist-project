<?php

require_once "app/model/UsuarioModel.php";
require_once "app/model/ChecklistModel.php";
use App\model\UsuarioModel;
use App\model\ChecklistModel;

$data = new stdClass;
$data->nome = "nometeste";
$data->senha = "senhateste";
$data->email = "teste@gmail.com";
$data->username = "teste";
$data->descricao = "descrição teste";
$data->id = 3;
$data->status = true;

$teste = ChecklistModel::updateChecklist($data);
//$teste = UsuarioModel::createUser($data);
var_dump($teste);