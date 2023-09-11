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
        
        if($idUsuario = $dataRequest['id']) {
            $idUsuario = intval($idUsuario);
            $chechlist = $dataRequest['item'];
            $descricao = $chechlist["descricao"];
            $titulo = $chechlist["titulo"];

            $data = new \stdClass;
            $data->id = $idUsuario;
            $data->nome = $titulo;
            $data->descricao = $descricao;
            try {
                $create = ChecklistModel::createChecklist($data);
                if(gettype($create) == 'integer') {
                    $quantidade_item = sizeof($chechlist);
                    if($quantidade_item > 2) {

                        $quantidade_item = $quantidade_item - 3;
                        while($quantidade_item != -1) {
                            $itens = $chechlist[$quantidade_item];
                        
                            $datai = new \stdClass;
                            $datai->id = intval($create);
                            $datai->nome = $itens['nome'];
                            $datai->descricao =$itens['descricao'];
                            
                            $setitem = $this->setItem($datai);
                            if(gettype($setitem) != 'integer'){
                                throw new \Exception($setitem);
                                die();
                            }
                            $quantidade_item --;  
                        }
                    } 
                    echo json_encode('Checklist criado com sucesso');
                }else {
                    throw new \Exception($create);
                }
            }catch(\Exception $e) {
                http_response_code(401);
                echo json_encode($e->getMessage());
            }
        }else {
            echo json_encode('36B2');
        }
    }

    private function setItem($data) {
        $setitem = ChecklistModel::setItem($data); 
        return $setitem;
    }
}
