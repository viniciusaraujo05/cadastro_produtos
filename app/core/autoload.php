<?php
require_once("Conexao.class.php");
define('DS', DIRECTORY_SEPARATOR);
define('BASE_URL','http://127.0.0.1/assessment-backend-xp/');

spl_autoload_register(function($classe){
	$classe = 'app'.DS.'controller'.DS.$classe.'.php';
	if(file_exists($classe)){
		require_once($classe);
	}
});

	
spl_autoload_register(function($classe){
	$classe = 'app'.DS.'model'.DS.$classe.'.php';
	if(file_exists($classe)){
		require_once($classe);
	}
});