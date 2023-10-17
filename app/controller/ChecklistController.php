<?php
namespace App\controller;

//require "app/Model/ChecklistModel.php";
use App\model\ChecklistModel;
use Dotenv\Dotenv; 
use PDO;
class ChecklistController {

    public function createChecklist() {
        $dotenv = Dotenv::createImmutable(dirname(__FILE__, 3));
        $dotenv->load();
        
        $dataRequest = json_decode(file_get_contents('php://input'), true);
        
        if($idUsuario = $dataRequest['id']) {
            $idUsuario = intval($idUsuario);
            $chechlist = $dataRequest['item'];
            $key = array_keys($chechlist);

            $data = new \stdClass;
            $data->id = $idUsuario;
            $data->nome = $chechlist["titulo"];
            $data->descricao = $chechlist["descricao"];

            try {
                $create = ChecklistModel::createChecklist($data);
                if(gettype($create) == 'integer') {
                    $quantidade_item = sizeof($key);
                    if($quantidade_item > 2) {
                        $quantidade_item -= 3;
                        while($quantidade_item != -1) {
                            $itens = $chechlist[$key[$quantidade_item]];
                        
                            $datai = new \stdClass;
                            $datai->id = intval($create);
                            $datai->nome = $itens['nome'];
                            $datai->descricao =$itens['descricao'];
                            
                            $setitem = $this->setItem($datai);
                            if(gettype($setitem) != 'integer'){
                                throw new \Exception("$setitem");
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

    public function deleteChecklist() {
        $dotenv = Dotenv::createImmutable(dirname(__FILE__, 3));
        $dotenv->load();

        $dataRequest = json_decode(file_get_contents('php://input'), true);
        $id = $dataRequest['id'];
       
        if(self::getIdItem($id)) {
            $getitem = ChecklistModel::getItem($id);
            $item = $getitem->fetchALL(PDO::FETCH_OBJ);
            $qttd = sizeof($item);
            $i = 0;
            while($i < $qttd) {
                $dele = ChecklistModel::deleteItem($item[$i]->iditem);
                $i ++;
            }
        }
        $delete = ChecklistModel::deleteChecklist($id);
       
        echo json_encode($delete);
    }
    private function setItem($data) {
        $setitem = ChecklistModel::setItem($data); 
        return $setitem;
    }

    public static function getIdItem($idchecklist) {
        $get = ChecklistModel::getIdItem($idchecklist);
        if(gettype($get) != 'string') {
            $array = $get->fetchALL(\PDO::FETCH_OBJ);
            return $array;
        }else {
            return $get;
        }
    }

    public static function deleteItem($iditem) {
        $delete = ChecklistModel::deleteItem($iditem);
        return $delete;
        
    }

    public static function getItem($idchecklist) {
        
        $get = ChecklistModel::getItem($idchecklist);
        if(gettype($get) != 'string') {
            $array = $get->fetchALL(\PDO::FETCH_OBJ);
            return $array;
        }else {
            return $get;
        }
    }
    public static function getChecklist($idchecklist) {
        
        $get = ChecklistModel::getChecklist($idchecklist);
        if(gettype($get) != 'string') {
            $array = $get->fetchALL(\PDO::FETCH_OBJ);
            return $array;
        }else {
            return $get;
        }
    }
}
