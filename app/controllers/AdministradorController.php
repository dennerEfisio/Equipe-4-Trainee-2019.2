<?php 

namespace app\controllers;
use app\core\Controller;

use app\models\Usuario;

class AdministradorController extends Controller
{
    public function index()
    {
        $dados["view"] = "home_back";
        $this->load("template",$dados);
    }

    public function logar()
    {
        $usuario =new Usuario();
        
        $email=$_GET['login_email'];
        $senha=md5($_GET['login_senha']);
        
        $dados["usuarios"]=$usuario->login($email,$senha);
         
        if($dados["usuarios"] !=0){
            @session_start();
              $_SESSION['status'] ="logado";
	          $_SESSION['login'] = true;
	          $_SESSION['senha'] =$senha;
              header("Location:".URL_BASE."administrador"); 
        }else{
            @session_start();
            $_SESSION = array(); 
	        session_destroy();
		    header("Location:".URL_BASE); 
          }
    }

    public function logout(){
        
            @session_start();
            $_SESSION = array(); 
	        session_destroy();
		    header("Location:".URL_BASE); 
          
    }
}