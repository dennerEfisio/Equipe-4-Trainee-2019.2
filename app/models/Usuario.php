<?php

namespace app\models;
use app\core\Model;

class Usuario extends Model{
    public function __construct() {
        parent::__construct();
    }
    
    public function lista(){
        $sql = "SELECT * FROM  usuario ";
        $qry = $this->db->query($sql);
        
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }

    public function busca($pesquisa){
        $sql = "SELECT * FROM  usuario 
                WHERE nome=:pesquisa";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":pesquisa",$pesquisa);
        $qry->execute();

        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }

    public function inserir($nome,$email,$senha,$url_imagem){

        $sql = "INSERT INTO usuario  SET
                nome=:nome,
                email=:email,
                senha=:senha,
                url_imagem=:url_imagem";

        $qry = $this->db->prepare($sql);
        $qry->bindValue(":nome",$nome);
        $qry->bindValue(":email",$email);
        $qry->bindValue(":senha",$senha);
        $qry->bindValue(":url_imagem",$url_imagem);
        
        $qry->execute();

        return $this->db->lastInsertId();
    }

    public function getusuario($id_usuario){
        $sql = "SELECT * FROM  usuario 
                WHERE id_usuario=:id_usuario";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id_usuario",$id_usuario);
        $qry->execute();

        if($qry->rowCount()>0){
            $resultado=$qry->fetch(\PDO::FETCH_OBJ);
        }

        return $resultado;
    }

    public function editar($id_usuario,$nome,$email,$senha,$url_imagem){

        $sql = "UPDATE usuario  SET
                nome=:nome,
                email=:email,
                senha=:senha,
                url_imagem=:url_imagem
                WHERE id_usuario=:id_usuario";

        $qry = $this->db->prepare($sql);
        $qry->bindValue(":nome",$nome);
        $qry->bindValue(":email",$email);
        $qry->bindValue(":senha",$senha);
        $qry->bindValue(":url_imagem",$url_imagem);
        $qry->bindValue(":id_usuario",$id_usuario);
        
        $qry->execute();
    }

    public function excluir($id_usuario){

        $sql = "DELETE FROM usuario 
                WHERE id_usuario=:id_usuario";

        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id_usuario",$id_usuario);
        
        $qry->execute();
    }

    public function login($email,$senha){
        $sql = "SELECT * FROM  usuario 
                WHERE email=:email
                AND senha=:senha";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":email",$email);
        $qry->bindValue(":senha",$senha);
        $qry->execute();
        
        if($qry->rowCount()>0){
            $resultado=$qry->fetch(\PDO::FETCH_ASSOC);
        }else{
            $resultado=0;
        }

        return $resultado;
        
    }

}
