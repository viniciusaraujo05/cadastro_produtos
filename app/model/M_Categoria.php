<?php

require("Model.php");
Class M_Categoria extends Model {

	public function cadastrarCategoria($categoriaName,$categoriaCode){

		try{
			$sql = "INSERT INTO tblcategorias (`id`,`categoria`) VALUES (?,?)";
			$stm = $this->pdo->prepare($sql);
			$stm->bindValue(1, $categoriaCode);
			$stm->bindValue(2, $categoriaName);
	
			$stm->execute();

			return true;

		}catch(PDOEXception $e){

			echo 'ERRO: ' . $e->getMessage();
			return false;
		}
	}

	public function listar_categorias(){

		try{
			$sql = "SELECT * FROM tblcategorias ";
			$stm = $this->pdo->prepare($sql);
			$stm->execute();

			$dados = $stm->fetchAll(PDO::FETCH_OBJ);

			return $dados;

		}catch(PDOEXception $e){

			echo 'ERRO: ' . $e->getMessage();
			return false;
		}
	}
}