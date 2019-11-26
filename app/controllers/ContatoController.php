<?php

namespace app\controllers;
use app\core\Controller;


class ContatoController extends Controller
{
    public function index()
    {                          
        $nome = isset($_POST["nome"])? strip_tags(filter_input(INPUT_POST,"nome")):NULL; 
        $email = isset($_POST["email"])? strip_tags(filter_input(INPUT_POST,"email")):NULL; 
        $telefone = isset($_POST["telefone"])? strip_tags(filter_input(INPUT_POST,"telefone")):NULL; 
        $mensagem = isset($_POST["mensagem"])? strip_tags(filter_input(INPUT_POST,"mensagem")):NULL; 

        $conteudo = " De : $nome \n Telefone: $telefone \n Mensagem: $mensagem";
        $subject = "Formulário de contato";
        $emailheader = "De: $email \r\n";

        if(mail(EMAIL_BASE,$subject,$conteudo,$emailheader))
        {
            header("location:" . URL_BASE );
        }
        else
            echo "Deu ruim";
        
        
    }
}