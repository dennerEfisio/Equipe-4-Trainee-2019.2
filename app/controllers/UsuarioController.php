<?php
namespace app\controllers;

use app\core\Controller;
use app\models\Usuario;

class UsuarioController extends Controller{
    
   public function index(){
       $usuario =new Usuario();
       $dados["usuarios"]=$usuario->lista();
       $dados["view"]="usuario/Index";
       $this->load("template", $dados); 
   }
   
   public function novo(){
        $dados["view"]="usuario/Create";
       $this->load("template", $dados);
   }

   public function salvar(){
    $usuario =new Usuario();
 
    $id_usuario=$_POST["id_usuario"];
    $nome=$_POST["txt_nome"];
    $email=$_POST["txt_email"];
    $senha=md5($_POST["txt_senha"]);
    $url_imagem=$_POST["txt_url_imagem"];


    if($id_usuario){
        $usuario->editar($id_usuario,$nome,$email,$senha,$url_imagem);
    }else{
        $usuario->inserir($nome,$email,$senha,$url_imagem);
    }
    header("location:".URL_BASE."usuario");
    }

    public function edit($id_usuario){
        $usuario =new Usuario(); 
        $dados["usuario"]=$usuario->getUsuario($id_usuario);
        $dados["view"]="usuario/Edit";
        $this->load("template", $dados);
    }

    public function delete($id_usuario,$excluir=NULL){
        $usuario =new Usuario(); 

        if($excluir =="S"){
            $usuario->excluir($id_usuario);
            header("location:".URL_BASE."usuario");
            exit;
        }

        $dados["usuario"]=$usuario->getUsuario($id_usuario);
        $dados["view"]="usuario/Delete";
        $this->load("template", $dados);
    }

    public function buscar(){
        $usuario =new Usuario();
        $pesquisa=$_GET["pesquisa"];
        $dados["usuarios"]=$usuario->busca($pesquisa);
        $dados["view"]="usuario/Index";
        $this->load("template", $dados); 
    }
}
