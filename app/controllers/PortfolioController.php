<?php

namespace app\controllers;
use app\core\Controller;

class PortfolioController extends Controller{
    public function index(){
        $dados["view"] = "portfolio/portfolio";
        $this->load("template",$dados);
    }
}