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
        $texto = fopen($arquivo , $permissao);
        if($texto == false)
            return "Erro na requisição";
        echo fread($texto,filesize($arquivo) == 0 ? 1 :filesize($arquivo) );
        fclose($texto);
    }

    public function escrever($arquivo , $novoTexto , $permissao = "w")
    {
        $arquivoTxt = fopen($arquivo,$permissao);
        if($arquivoTxt != false)
        {
            if(unlink($arquivo))
            {
                $arquivoTxt = fopen($arquivo,"x+");
                if($arquivoTxt != false)
                {
                    fwrite($arquivoTxt,$novoTexto);
                    fclose($arquivoTxt);
                    return 0;
                }
            }
            else
            {
                echo "Erro de edição do arquivo";
                return -1;
            }
        }
        else
        {
            echo "Erro ao abrir arquivo";
            return -2;
        }
    }
    
}