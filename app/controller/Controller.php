<?php
Class Controller {

    //Método construtor
    public function __construct(){
        session_start();
    }

    public function index(){
		//require ("app/views/css/style.css");
		require_once("app/Views/dashboard.php");
	}
    //O método abaixo irá validar se a página requisitada existe
    protected function validador($arquivo){
        
        if(file_exists($arquivo)){
            
            return true;
            
        }else{
            
        
            require_once ("app/views/404.php");
    
            return false;
        }
    } // validador()
 
}//Class