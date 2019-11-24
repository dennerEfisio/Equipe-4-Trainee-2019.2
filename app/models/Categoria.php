<?php 

namespace app\models;

use app\core\Model;

class Categoria extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function lista()
    {
        $sql = "SELECT * FROM categoria";

        $qry = $this->db->query($sql);
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }

    public function adicionar($nome , $descricao)
    {
        $sql = "INSERT INTO categoria SET nome = :nome , descricao = :descricao ";

        $qry = $this->db->prepare($sql);
        $qry->bindValue(":nome",$nome);
        $qry->bindValue(":descricao",$descricao);
        $qry->execute();

        return $this->db->lastInsertId();
    }

    public function getCategoria($id)
    {
        $resultado = array();

        $sql = "SELECT * FROM categoria WHERE id = :id ";

        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id",$id);
        $qry->execute();

        if($qry->rowCount() > 0)
        {
            $resultado = $qry->fetch(\PDO::FETCH_OBJ);
        }
        return $resultado;
    }

    public function editar($id,$nome,$descricao)
    {
        $sql = "UPDATE categoria SET nome = :nome , descricao = :descricao WHERE id = :id";

        $qry = $this->db->prepare($sql);
        $qry->bindValue(":nome",$nome);
        $qry->bindValue(":descricao",$descricao);
        $qry->bindValue(":id",$id);
        $qry->execute();

    }

    public function excluir($id)
    {
        $sql = "DELETE FROM categoria WHERE id = :id ";

        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id",$id);
        $qry->execute();
    }

    public function buscarCategoria($nome)
    {
        if($nome != NULL){

            $resultado= array();
            
            $sql = "SELECT * FROM categoria WHERE nome = :nome ";
    
            $qry = $this->db->prepare($sql);
            $qry->bindValue(":nome",$nome);
            $qry->execute();
            
            if($qry->rowCount() > 0)
            {
                $total = $qry->rowCount();
                for($i = 0 ; $i < $total ; $i++){

                    $resultado[$i] = $qry->fetch(\PDO::FETCH_OBJ);

                }
            }
            
            return $resultado;
        }
        else
            return "Categoria não encontrada";
        
    }

    public function listaCat(){
        $sql = "SELECT * FROM  categoria ";
        $qry = $this->db->query($sql);
        
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }

}