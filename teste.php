<?php 
use App\controller\ChecklistController;
//use App\model\ChecklistModel;
//use App\model\UsuarioModel;
require_once('app/Model/UsuarioModel.php');
require_once('app/Model/ChecklistModel.php');
require_once('app/controller/ChecklistController.php');
$idusuario = 6;

//$select = UsuarioModel::getidChecklistUser($idusuario);
// //$teste = $select->fetchALL(PDO::FETCH_OBJ);
// $check = new ChecklistController();
// $get = $check->deleteChecklist($idusuario);
//$teste = $get->fetchALL(PDO::FETCH_OBJ);

//$get = ChecklistController::getChecklist($idusuario);
$get = ChecklistController::getItem($idusuario);
var_dump($get);