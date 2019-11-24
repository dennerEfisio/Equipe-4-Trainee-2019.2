<?php 

namespace app\controllers;

use app\core\Controller;
use app\models\Categoria;


class CategoriaController extends Controller
{
    public function index()
    {
        $categoria = new Categoria;

        $dados["categorias"] = $categoria->lista();

        $dados["view"] = "categoria/Index-categoria";
        
        $this->load("template",$dados);
    }

    public function adicionar()
    {
        $dados["view"] = "categoria/Adicionar-categoria";
        $this->load("template",$dados);
    }

    public function salvar()
    {
        $categoria = new Categoria;

        $id = isset($_POST["id"]) ? strip_tags(filter_input(INPUT_POST, "id")) : NULL;

        $nome = isset($_POST["nome"]) ? strip_tags(filter_input(INPUT_POST, "nome")) : NULL;
        $descricao = isset($_POST["descricao"]) ? strip_tags(filter_input(INPUT_POST, "descricao")) : NULL;

        if($id)
        {
            $categoria->editar($id,$nome,$descricao);
        }
        else
        {
            $categoria->adicionar($nome,$descricao);
        }

        header("location:" . URL_BASE . "categoria/");
    }

    public function editar($id)
    {
        $categoria = new Categoria;

        $dados["categoria"] = $categoria->getCategoria($id);

        $dados["view"] = "categoria/Editar-categoria";

        $this->load("template",$dados);

    }

    public function excluir($id)
    {
        $categoria = new Categoria;

        $categoria->excluir($id);
        header("location:" . URL_BASE . "categoria");
    }

    public function mostrar($id)
    {
        $categoria = new Categoria;

        $dados["categoria"] = $categoria->getCategoria($id);

        $dados["view"] = "categoria/Mostrar-categoria";
        
        $this->load("template",$dados);
    }

    public function buscar(){

        $categoria = new Categoria;

        $nome = isset($_POST["buscaCategoria"]) ? strip_tags(filter_input(INPUT_POST, "buscaCategoria")) : NULL;

        $dados["categorias"] = $categoria->buscarCategoria($nome);

        $dados["view"] = "categoria/Index-categoria";

        
        $this->load("template",$dados);
    }
}