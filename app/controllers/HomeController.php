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

        $arquivos[0] = isset($_POST["titulop1"])? strip_tags(filter_input(INPUT_POST,"titulop1")):NULL; 
        $arquivos[1] = isset($_POST["textop1"])? strip_tags(filter_input(INPUT_POST,"textop1")):NULL; 
        $arquivos[2] = isset($_POST["titulop2"])? strip_tags(filter_input(INPUT_POST,"titulop2")):NULL; 
        $arquivos[3] = isset($_POST["textop2"])? strip_tags(filter_input(INPUT_POST,"textop2")):NULL; 

        for($i = 0 ; $i <= 3 ; $i++)
        {
            if($arquivos[$i] != NULL)
            {
                switch($i)
                {
                    case 0:
                        $this->escreve("home/titulop1.txt",$arquivos[$i]);
                        break;
                    case 1:
                        $this->escreve("home/textop1.txt",$arquivos[$i]);
                        break;
                    case 2:
                        $this->escreve("home/titulop2.txt",$arquivos[$i]);
                        break;
                    case 3:
                        $this->escreve("home/textop2.txt",$arquivos[$i]);
                        break;
                }
                
            } 
        }
    }
}