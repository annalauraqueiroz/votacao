<html>
	  
<head>
	<meta http-equiv="Content-Type">
	<title>Cadastro de Eleição</title>
</head>

<body>

	<?php
		include_once("conexao.php");
		
		$idVoto = trim($_POST['IDVoto']);
		$idCand = trim($_POST["listIdCandidatos"]);	
		$ano = trim($_POST['Ano']);	
		$cpf = trim($_POST['CPFEleitor']);		
		$camposOk = true;
							
		if($idVoto == null) {
			echo "Campo ID do voto não informado" . "<BR>";
			$camposOk = false;
		} 
		
		if($idCand	== null) {
			echo "Campo ID do candidato não informado" . "<BR>";
			$camposOk = false;
		}
		if($ano	== null) {
			echo "Campo ano não informado" . "<BR>";
			$camposOk = false;
		}
		if($cpf	== null) {
			echo "Campo CPF do eleitor não informado" . "<BR>";
			$camposOk = false;
		}
		
		if($camposOk == true){
			echo "<h1>Os dados informados foram:</h1>";
			
			echo "ID voto: $idVoto<BR>";
			echo "ID do candidato: $idCand<BR>";
			echo "Ano: $ano<BR>";
			echo "CPF do eleitor: $cpf<BR>";
			
			$sql = "INSERT INTO Eleicao (id_voto,id_candidato, ano, cpf_eleitor)
				VALUES (".$idVoto.",".$idCand.",".$ano.",'".$cpf."');";
			
			$res = mysqli_query($con, $sql)  
			or die("Erro ao inserir:<BR>" . mysqli_error($con));
			
			$con -> close();
		}		
	?>
	
</body>

</html>