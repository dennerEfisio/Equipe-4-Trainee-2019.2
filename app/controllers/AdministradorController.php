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
        $dados["usuarios"]=$usuario->getLogin($email,$senha);
    }
}