<?php

	function lista($nomeTabela){
		include("conexao.php");
		
		$sql = "SELECT * from $nomeTabela";		
		
		$res = mysqli_query($con, $sql)
			or die("Erro ao listar:<BR>" . mysqli_error($con));
			
		return $res;
	}
?>