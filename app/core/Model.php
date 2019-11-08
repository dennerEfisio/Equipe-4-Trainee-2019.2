<?php 

namespace app\core;

abstract class Model
{
    protected $db;

    public function __construct()
    {
        try{

            $this->db = new \PDO("mysql:dbname=".BANCO.";host=".SERVIDOR,USUARIO,SENHA); 

        }catch(PDOException $e){
            
            echo "Conection failed: ".$e->getMassege();
        }
    }
}