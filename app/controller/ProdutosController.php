<?php
require("Controller.php");
require_once("app/model/M_Produtos.php");

class produtosController  extends Controller{
    public function cadastro(){
		try{
			$sku = $_POST['sku'];
			$nome = $_POST['nome'];
			$price = $_POST['price'];
			$quantity = $_POST['quantity'];	
			$categories = implode(",", $_POST["categories"]);
			$description = $_POST['description'];

			$objTurma = new M_Produtos(Conexao::getInstance());
			$retorno = $objTurma->cadastrarProdutos($sku,$nome,$price,$quantity,$categories,$description);
			
			$codigo = $retorno[0];			
			
			$array = array(true, $codigo);

			echo json_encode($array);
		}catch(PDOEXception $e){
			echo 'ERRO: ' . $e->getMessage();
			return false;		
		}
	}


}