<?php

namespace app\controllers;
use app\core\Controller;


class HomeController extends Controller
{
    public function index()
    {                          
        $dados['view'] = "home/home";
        $this->load('template',$dados);
    }
    public function edit()
    {
        $dados["view"] = "home/editar";
        $this->load('template',$dados);
    }

    public function editar()
    {
        $arquivos = array();

        // ------- Primeiro paráfrago
        $arquivos[0] = isset($_POST["titulop1"])? strip_tags(filter_input(INPUT_POST,"titulop1")):NULL; 
        $arquivos[1] = isset($_POST["textop1"])? strip_tags(filter_input(INPUT_POST,"textop1")):NULL; 

        // ------- Segundo Parágrafo
        $arquivos[2] = isset($_POST["titulop2"])? strip_tags(filter_input(INPUT_POST,"titulop2")):NULL; 
        $arquivos[3] = isset($_POST["textop2"])? strip_tags(filter_input(INPUT_POST,"textop2")):NULL;

        // -------- Primeiro Slide
        $arquivos[4] = isset($_POST["titulos1"])? strip_tags(filter_input(INPUT_POST,"titulos1")):NULL; 
        $arquivos[5] = isset($_POST["descricaos1"])? strip_tags(filter_input(INPUT_POST,"descricaos1")):NULL; 
        $arquivos[6] = isset($_POST["textos1"])? strip_tags(filter_input(INPUT_POST,"textos1")):NULL;


        // --------- Segundo Slide
        $arquivos[7] = isset($_POST["titulos2"])? strip_tags(filter_input(INPUT_POST,"titulos2")):NULL; 
        $arquivos[8] = isset($_POST["descricaos2"])? strip_tags(filter_input(INPUT_POST,"descricaos2")):NULL; 
        $arquivos[9] = isset($_POST["textos2"])? strip_tags(filter_input(INPUT_POST,"textos2")):NULL; 

        // --------- Terceiro Slide
        $arquivos[10] = isset($_POST["titulos3"])? strip_tags(filter_input(INPUT_POST,"titulos3")):NULL; 
        $arquivos[11] = isset($_POST["descricaos3"])? strip_tags(filter_input(INPUT_POST,"descricaos3")):NULL; 
        $arquivos[12] = isset($_POST["textos3"])? strip_tags(filter_input(INPUT_POST,"textos3")):NULL; 

        // --------- Quarto Slide
        $arquivos[13] = isset($_POST["titulos4"])? strip_tags(filter_input(INPUT_POST,"titulos4")):NULL; 
        $arquivos[14] = isset($_POST["descricaos4"])? strip_tags(filter_input(INPUT_POST,"descricaos4")):NULL; 
        $arquivos[15] = isset($_POST["textos4"])? strip_tags(filter_input(INPUT_POST,"textos4")):NULL; 
        
        $nomeArquivos = array("titulop1","textop1","titulop2","textop2","slides/titulos1","slides/descricaos1","slides/textos1","slides/titulos2","slides/descricaos2","slides/textos2","slides/titulos3","slides/descricaos3","slides/textos3","slides/titulos4","slides/descricaos4","slides/textos4");

        
        for($i = 0 ; $i < count($arquivos)  ; $i++)
        {
            if($arquivos[$i] != NULL && strlen($arquivos[$i]) != 0 && $arquivos[$i] != " " )
            {
                $this->escrever(PATH_TXT."home/".$nomeArquivos[$i].".txt",$arquivos[$i]);
            } 
        }
        header("location:" . URL_BASE . "home/edit/");
    }
}