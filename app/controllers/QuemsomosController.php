<?php

namespace app\controllers;
use app\core\Controller;

class QuemsomosController extends Controller{
    public function index(){
        $dados["view"] = "quemsomos/quemsomos";
        $this->load("template",$dados);
    }
}