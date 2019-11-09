<?php

namespace app\models;
use app\core\Model;

class Categoria extends Model{
    public function __construct() {
        parent::__construct();
    }
    
    public function listaCat(){
        $sql = "SELECT * FROM  categoria ";
        $qry = $this->db->query($sql);
        
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }
}