<?php
namespace app\controllers;
use app\core\Controller;

class EspetaculoController extends Controller{

    public function index(){
        $dados["view"]="espetaculo/Index";
        $this->load("template",$dados);
    } 
    
    public function novo(){
        $dados["view"]="espetaculo/Create";
        $this->load("template",$dados);
    } 

  
    
}
