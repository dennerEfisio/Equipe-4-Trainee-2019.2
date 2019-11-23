<?php 

namespace app\core;

class Controller
{
    public function load($viewName , $viewData=array())
    {
        extract($viewData);
        include "app/views/".$viewName.".php";
    }

    public function ler($arquivo,$permissao = "r")
    {
        $tituloHome = fopen($arquivo , $permissao);
        if($tituloHome == false)
            return "Erro na requisição";
        echo fread($tituloHome,filesize($arquivo));
        fclose($tituloHome);
    }

    public function escrever($arquivo , $novoTexto , $permissao = "w")
    {
        
    }
    
}