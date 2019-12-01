<?php

namespace app\models;
use app\core\Model;

class Espetaculo extends Model{
    public function __construct() {
        parent::__construct();
    }
    
    public function lista(){
        $sql = "SELECT * FROM  espetaculo ";
        $qry = $this->db->query($sql);
        
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }

    public function inserir($nome,$ingresso,$sinopse,$url_imagem,$data_criacao,$local_id,$categoria_id){

        $sql = "INSERT INTO espetaculo  SET
                nome=:nome,
                ingresso=:ingresso,
                sinopse=:sinopse,
                url_imagem=:url_imagem,
                data_criacao=:data_criacao,
                local_id=:local_id,
                categoria_id=:categoria_id";

        $qry = $this->db->prepare($sql);
        $qry->bindValue(":nome",$nome);
        $qry->bindValue(":ingresso",$ingresso);
        $qry->bindValue(":sinopse",$sinopse);
        $qry->bindValue(":url_imagem",$url_imagem);
        $qry->bindValue(":data_criacao",$data_criacao);
        $qry->bindValue(":local_id",$local_id);
        $qry->bindValue(":categoria_id",$categoria_id);
        
        $qry->execute();

        return $this->db->lastInsertId();
    }

    public function getEspetaculo($id){
        $sql = "SELECT * FROM  espetaculo 
                WHERE id=:id";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id",$id);
        $qry->execute();

        if($qry->rowCount()>0){
            $resultado=$qry->fetch(\PDO::FETCH_OBJ);
        }

        return $resultado;
    }

    public function editar($id,$nome,$ingresso,$sinopse,$url_imagem,$data_criacao,$local_id,$categoria_id){

        $sql = "UPDATE espetaculo  SET
                nome=:nome,
                ingresso=:ingresso,
                sinopse=:sinopse,
                url_imagem=:url_imagem,
                data_criacao=:data_criacao,
                local_id=:local_id,
                categoria_id=:categoria_id
                WHERE id=:id";

        $qry = $this->db->prepare($sql);
        $qry->bindValue(":nome",$nome);
        $qry->bindValue(":ingresso",$ingresso);
        $qry->bindValue(":sinopse",$sinopse);
        $qry->bindValue(":url_imagem",$url_imagem);
        $qry->bindValue(":data_criacao",$data_criacao);
        $qry->bindValue(":local_id",$local_id);
        $qry->bindValue(":categoria_id",$categoria_id);
        $qry->bindValue(":id",$id);
        
        $qry->execute();
    }

    public function excluir($id){

        $sql = "DELETE FROM espetaculo 
                WHERE id=:id";

        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id",$id);
        
        $qry->execute();
    }

    public function busca($pesquisa){
        $sql = "SELECT * FROM  espetaculo 
                WHERE nome=:pesquisa";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":pesquisa",$pesquisa);
        $qry->execute();

        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }

}
