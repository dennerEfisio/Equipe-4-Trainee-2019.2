<?php

namespace app\controllers;
use app\core\Controller;

require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


class ContatoController extends Controller
{
    public function index()
    {                          
        $nome = isset($_POST["nome"])? strip_tags(filter_input(INPUT_POST,"nome")):NULL; 
        $email = isset($_POST["email"])? strip_tags(filter_input(INPUT_POST,"email")):NULL; 
        $telefone = isset($_POST["telefone"])? strip_tags(filter_input(INPUT_POST,"telefone")):NULL; 
        $mensagem = isset($_POST["mensagem"])? strip_tags(filter_input(INPUT_POST,"mensagem")):NULL; 

        $conteudo = " De : $nome <br/> Email: $email <br/> Telefone: $telefone <br/> Mensagem: <br/> $mensagem";
        $subject = "Formulário de contato";
        


        // Criação do Objeto da Classe PHPMailer
        $mail = new PHPMailer(true); 
        $mail->CharSet="UTF-8";


        try {
                                            
            
            // Usar SMTP para o envio
            $mail->isSMTP();                                      

            // Detalhes do servidor (No nosso exemplo é o Google)
            $mail->Host = 'smtp.gmail.com';

            // Permitir autenticação SMTP
            $mail->SMTPAuth = true;                               

            // Nome do usuário
            $mail->Username = EMAIL_BASE;        
            // Senha do E-mail         
            $mail->Password = SENHA_EMAIL;                           
            // Tipo de protocolo de segurança
            $mail->SMTPSecure = 'tls';   

            // Porta de conexão com o servidor                        
            $mail->Port = 587;

            
            // Garantir a autenticação com o Google
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );

            // Remetente
            $mail->setFrom($email, $nome);
            
            // Destinatário
            $mail->addAddress('felipepecas19@gmail.com', 'Felipe Peças');

            // Conteúdo

            // Define conteúdo como HTML
            $mail->isHTML(true);                                  

            // Assunto
            $mail->Subject = 'Contato pelo site';
            $mail->Body    = $conteudo;
            $mail->AltBody = $mensagem;

            // Enviar E-mail
            $mail->send();

            header("location:" . URL_BASE );
            
        } catch (Exception $e) {
            $confirmacao = 'A mensagem não pode ser enviada';
            
        }
                

            
        
    }
}