<?php
namespace app\controllers;

use app\core\Controller;
use app\models\Espetaculo;
use app\models\Categoria;
use app\models\Local;

class EspetaculoController extends Controller{
    
   public function index()
   {
        @session_start(); 
        if(isset($_SESSION['status'])){

            $espetaculo =new Espetaculo();
            $dados["espetaculos"]=$espetaculo->lista();
            $dados["view"]="espetaculo/Index";
            $this->load("template", $dados); 
            
        }else{
            $dados['view'] = "home/home";
            $this->load("template",$dados);
        }
   }
   
   public function novo()
   {
        @session_start(); 
        if(isset($_SESSION['status'])){

            $categoria =new Categoria();
            $local =new Local();
            $dados["categorias"]=$categoria->listaCat();
            $dados["locais"]=$local->listaLoc();
            $dados["view"]="espetaculo/Create";
            $this->load("template", $dados);
            
        }else{
            $dados['view'] = "home/home";
            $this->load("template",$dados);
        }
   }

   public function salvar()
    {
        @session_start(); 
        if(isset($_SESSION['status'])){

            
            $espetaculo =new Espetaculo();
        
            $id=$_POST["id"];
            $nome=$_POST["txt_nome"];
            $ingresso=$_POST["txt_ingresso"];
            $sinopse=$_POST["txt_sinopse"];
            $url_imagem=$_POST["txt_url_imagem"];
            date_default_timezone_set('America/Sao_Paulo');
            $data_criacao=date('Y-m-d H:i:s');
            $local_id=$_POST["txt_localId"];
            $categoria_id=$_POST["txt_categoriaId"];
        
            if($id){
                $espetaculo->editar($id,$nome,$ingresso,$sinopse,$url_imagem,$data_criacao,$local_id,$categoria_id);
            }else{
                $espetaculo->inserir($nome,$ingresso,$sinopse,$url_imagem,$data_criacao,$local_id,$categoria_id);
            }
            header("location:".URL_BASE."espetaculo");
            
            
        }else{
            $dados['view'] = "home/home";
            $this->load("template",$dados);
        }
    }
    public function edit($id){
        @session_start(); 
        if(isset($_SESSION['status'])){

            $espetaculo =new Espetaculo(); 
            $categoria =new Categoria();
            $local =new Local();
            $dados["categorias"]=$categoria->listaCat();
            $dados["locais"]=$local->listaLoc();
            $dados["espetaculo"]=$espetaculo->getEspetaculo($id);
            $dados["view"]="espetaculo/Edit";
            $this->load("template", $dados);
            
            
        }else{
            $dados['view'] = "home/home";
            $this->load("template",$dados);
        }
    }

    public function delete($id,$excluir=NULL){
        @session_start(); 
        if(isset($_SESSION['status'])){

            
            $espetaculo =new Espetaculo(); 
    
            if($excluir =="S"){
                $espetaculo->excluir($id);
                header("location:".URL_BASE."espetaculo");
                exit;
            }
    
            $dados["espetaculo"]=$espetaculo->getEspetaculo($id);
            $dados["view"]="espetaculo/Delete";
            $this->load("template", $dados);
            
        }else{
            $dados['view'] = "home/home";
            $this->load("template",$dados);
        }
    }

    public function buscar(){
        @session_start(); 
        if(isset($_SESSION['status'])){

            $espetaculo =new Espetaculo();
            $pesquisa=$_GET["pesquisa"];
            $dados["espetaculos"]=$espetaculo->busca($pesquisa);
            $dados["view"]="espetaculo/Index";
            $this->load("template", $dados); 
            
        }else{
            $dados['view'] = "home/home";
            $this->load("template",$dados);
        }
    }
}
