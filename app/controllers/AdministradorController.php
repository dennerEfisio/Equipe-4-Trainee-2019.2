<?php 

namespace app\controllers;
use app\core\Controller;

class AdministradorController extends Controller
{
    public function index()
    {
        $dados["view"] = "home_back";
        $this->load("template",$dados);
    }
}