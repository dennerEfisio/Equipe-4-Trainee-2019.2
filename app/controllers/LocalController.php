<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Local;

class LocalController extends Controller
{
    public function index()
    {
        @session_start(); 
        if(isset($_SESSION['status'])){

            $local = new Local;
    
            $dados["locais"] = $local->lista();
    
            $dados["view"] = "local/Index-local";
    
            $this->load("template", $dados);
            
            
        }else{
            $dados['view'] = "home/home";
            $this->load("template",$dados);
        }
    }

    public function adicionar()
    {
        @session_start(); 
        if(isset($_SESSION['status'])){

            $dados["view"] = "local/Adicionar-local";
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

            
            $local = new Local;
    
            $id = isset($_POST["id"]) ? strip_tags(filter_input(INPUT_POST, "id")) : NULL;
    
            $nomeResponsavel = isset($_POST["nomeResponsavel"]) ? strip_tags(filter_input(INPUT_POST, "nomeResponsavel")) : NULL;
            $sobrenomeResponsavel = isset($_POST["sobrenomeResponsavel"]) ? strip_tags(filter_input(INPUT_POST, "sobrenomeResponsavel")) : NULL;
            $cpf = isset($_POST["cpf"]) ? strip_tags(filter_input(INPUT_POST, "cpf")) : NULL;
            $cidade = isset($_POST["cidade"]) ? strip_tags(filter_input(INPUT_POST, "cidade")) : NULL;
            $bairro = isset($_POST["bairro"]) ? strip_tags(filter_input(INPUT_POST, "bairro")) : NULL;
            $rua = isset($_POST["rua"]) ? strip_tags(filter_input(INPUT_POST, "rua")) : NULL;
            $numero = isset($_POST["numero"]) ? strip_tags(filter_input(INPUT_POST, "numero")) : NULL;
            $complemento = isset($_POST["complemento"]) ? strip_tags(filter_input(INPUT_POST, "complemento")) : NULL;
            $anotacoes = isset($_POST["anotacoes"]) ? strip_tags(filter_input(INPUT_POST, "anotacoes")) : NULL;
            
    
            if ($id) {
                $local->editar($id, $nomeResponsavel, $sobrenomeResponsavel, $cpf, $cidade, $bairro, $rua, $numero, $complemento, $anotacoes);
                
            } else {
                
                $local->adicionar($nomeResponsavel, $sobrenomeResponsavel, $cpf, $cidade, $bairro, $rua, $numero, $complemento, $anotacoes);
            }
            
            
    
            header("location:" . URL_BASE . "local/");
            
        }else{
            $dados['view'] = "home/home";
            $this->load("template",$dados);
        }
        

    }

    public function editar($id)
    {
        @session_start(); 
        if(isset($_SESSION['status'])){

            $local = new Local;
    
            $dados["local"] = $local->getLocal($id);
    
            $dados["view"] = "local/Editar-local";
    
            $this->load("template", $dados);
            
            
        }else{
            $dados['view'] = "home/home";
            $this->load("template",$dados);
        }
    }

    public function excluir($id)
    {
        @session_start(); 
        if(isset($_SESSION['status'])){

            $local = new Local;
    
            $local->excluir($id);
            header("location:" . URL_BASE . "Local");
            exit;
            
        }else{
            $dados['view'] = "home/home";
            $this->load("template",$dados);
        }

    }

    public function mostrar($id)
    {
        @session_start(); 
        if(isset($_SESSION['status'])){

            $local = new Local;
    
            $dados["local"] = $local->getLocal($id);
    
            $dados["view"] = "local/Mostrar-local";
    
            $this->load("template",$dados);
            
            
        }else{
            $dados['view'] = "home/home";
            $this->load("template",$dados);
        }
    }
    public function buscar(){

        @session_start(); 
        if(isset($_SESSION['status']))
        {

            $categoria = new Local;
    
            $nome = isset($_POST["buscaLocal"]) ? strip_tags(filter_input(INPUT_POST, "buscaLocal")) : NULL;
    
            $dados["locais"] = $categoria->buscarLocal($nome);
    
            $dados["view"] = "local/Index-local";
    
            
            $this->load("template",$dados);
            
        }else{
            $dados['view'] = "home/home";
            $this->load("template",$dados);
        }
    }
}
