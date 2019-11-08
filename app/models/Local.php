<?php 

namespace app\models;
use app\core\Model;

class Local extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function lista(){
        $sql = "SELECT * FROM local";
        $qry = $this->db->query($sql);
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }

    public function adicionar($nomeResponsavel, $sobrenomeResponsavel, $cpf , $cidade , $bairro , $rua , $numero , $complemento , $anotacoes){

        try{
            

            $sql = "INSERT INTO local (nomeResponsavel, sobrenomeResponsavel , cpf , cidade , bairro, rua , numero , complemento , anotacoes) VALUES ('$nomeResponsavel', '$sobrenomeResponsavel', '$cpf' , '$cidade' , '$bairro' , '$rua' , '$numero' , '$complemento' , '$anotacoes')";
            

            $this->db->query($sql);
            
        }catch(PDOException $e){
            echo $sql."</br>".$e->getMessage();
        }

        
    }

    public function getLocal($id)
    {
        $resultado = array();

        $sql = "SELECT * FROM local WHERE id = :id";

        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id", $id);
        $qry->execute();

        if($qry->rowCount() > 0)
        {
            $resultado = $qry->fetch(\PDO::FETCH_OBJ);
        }
        return $resultado;
    }

    public function editar($id,$nomeResponsavel, $sobrenomeResponsavel, $cpf , $cidade , $bairro , $rua , $numero , $complemento , $anotacoes){
        $sql = "UPDATE local SET nomeResponsavel = :nomeResponsavel , sobrenomeResponsavel = :sobrenomeResponsavel , cpf = :cpf , cidade = :cidade , bairro = :bairro , rua = :rua , numero = :numero , complemento = :complemento , anotacoes = :anotacoes WHERE id = :id ";

        $qry = $this->db->prepare($sql);
        $qry->bindValue(":nomeResponsavel" , $nomeResponsavel);
        $qry->bindValue(":sobrenomeResponsavel", $sobrenomeResponsavel);
        $qry->bindValue(":cpf",$cpf);
        $qry->bindValue(":cidade", $cidade);
        $qry->bindValue(":bairro", $bairro);
        $qry->bindValue(":rua", $rua);
        $qry->bindValue(":numero" , $numero);
        $qry->bindValue(":complemento", $complemento);
        $qry->bindValue(":anotacoes", $anotacoes);
        $qry->bindValue(":id",$id);
        $qry->execute();

    }
    
    public function excluir($id){
        $sql = "DELETE FROM local WHERE id = :id ";

        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id",$id);
        $qry->execute();
    }

    public function buscarLocal($nome)
    {
        if($nome != NULL){

            $resultado= array();
            
            $sql = "SELECT * FROM local WHERE nomeResponsavel = :nome ";
    
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
            return "Local não encontrada";
        
    }
}