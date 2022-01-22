<?php

require("Model.php");
Class M_Produtos extends Model {

	public function cadastrarProdutos($sku,$nome,$price,$quantity,$categories,$description){

		try{
			$sql = "INSERT INTO tblprodutos (`id`,
			`Nome`,
			`price`,
			`quantity`,
			`categories`,
			`description`) VALUES (?,?,?,?,?,?)";
			$stm = $this->pdo->prepare($sql);
			$stm->bindValue(1, $sku);
			$stm->bindValue(2, $nome);
			$stm->bindValue(3, $price);
			$stm->bindValue(4, $quantity);
			$stm->bindValue(5, $categories);
			$stm->bindValue(6, $description);
	
			$stm->execute();

			return true;

		}catch(PDOEXception $e){

			echo 'ERRO: ' . $e->getMessage();
			return false;
		}
	}
}