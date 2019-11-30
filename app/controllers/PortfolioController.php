<?php

namespace app\controllers;
use app\core\Controller;
use app\models\Espetaculo;

class PortfolioController extends Controller{
    public function index(){
        $espetaculo =new Espetaculo();
        $dados["espetaculos"]=$espetaculo->lista();
        $dados["view"] = "portfolio/portfolio";
        $this->load("template",$dados);
    }
}