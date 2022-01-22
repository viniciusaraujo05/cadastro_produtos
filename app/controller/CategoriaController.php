<?php
require("Controller.php");
require_once("app/model/M_Categoria.php");

class categoriaController  extends Controller{
    public function cadastro(){
		
		$categoriaName = $_POST['CategoryName'];
		$categoriaCode = $_POST['CategoryCode'];
			 
		$objTurma = new M_Categoria(Conexao::getInstance());
		$retorno = $objTurma->cadastrarCategoria($categoriaName,$categoriaCode);
		
		$codigo = $retorno[0];

		//O array retorna o valor true, e o codigo (PK)
		$array = array(true, $codigo);

		echo json_encode($array);
	
	}

	public function categorias(){
		$objCurso = new M_Categoria(Conexao::getInstance());
		$retorno = $objCurso->listar_categorias();
		echo json_encode($retorno);
	}


}