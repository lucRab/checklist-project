<?php
namespace App\controller;
require "app/Model/ChecklistModel.php";
use App\model\ChecklistModel;
use Dotenv\Dotenv;

class ChecklistController {

    public function createChecklist($chechlist) {
        $dotenv = Dotenv::createImmutable(dirname(__FILE__, 3));
        $dotenv->load();
        
        $dataRequest = json_decode(file_get_contents('php://input'), true);
        
        $idUsuario = $dataRequest['id'];
        $idUsuario = intval($idUsuario);
        $chechlist = $dataRequest['item'];
        $descricao = $chechlist["descricao"];
        $titulo = $chechlist["titulo"];
        
      

        $data = new \stdClass;
        $data->id = $idUsuario;
        $data->nome = $titulo;
        $data->descricao = $descricao;

        $create = ChecklistModel::createChecklist($data);
        if($item = $chechlist['0']) {

            $quantidade_item = sizeof($chechlist);
            $quantidade_item = $quantidade_item - 3;
            while($quantidade_item != -1) {
                $itens = $chechlist[$quantidade_item];
            
                $datai = new \stdClass;
                $datai->id = intval($create);
                $datai->nome = $itens['nome'];
                $datai->descricao =$itens['descricao'];
            
                $setitem = $this->setItem($datai); 
                $quantidade_item --;
                
            }
            return var_dump($create, $setitem);
        }

    }

    private function setItem($data) {
        $setitem = ChecklistModel::setItem($data); 
        return $setitem;
    }
}
