<?php

namespace app\models;
use app\core\Model;

class Local extends Model{
    public function __construct() {
        parent::__construct();
    }
    
    public function listaLoc(){
        $sql = "SELECT * FROM  local ";
        $qry = $this->db->query($sql);
        
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }
}