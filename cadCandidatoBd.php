<html>
	  
<head>
	<meta http-equiv="Content-Type">
	<title>Cadastro de Candidato</title>
</head>

<body>

	<?php
		include_once("conexao.php");
		
		$id = trim($_POST['ID']);
		$nome = trim($_POST["Nome"]);
		$sigla = trim($_POST["listPartidos"]);		
		$camposOk = true;
							
		if($nome == null) {
			echo "Campo nome não informado" . "<BR>";
			$camposOk = false;
		} 
		
		if($id == null) {
			echo "Campo ID do candidato não informado" . "<BR>";
			$camposOk = false;
		}
		
		if($sigla == "0") {
			echo "Campo sigla não informado" . "<BR>";
			$camposOk = false;
		}
		
		
		if($camposOk == true){
			echo "<h1>Os dados informados foram:</h1>";
			
			echo "Nome: $nome<BR>";
			echo "ID do candidato: $id<BR>";
			echo "Sigla do partido: $sigla<BR>";
			
			
			$sql = "INSERT INTO Candidatos (id_candidato, nome, sigla_partido)
				VALUES ('".$id."','".$nome."','".$sigla."');";
			
			$res = mysqli_query($con, $sql)  
			or die("Erro ao inserir:<BR>" . mysqli_error($con));
		}		
	?>
	
</body>

</html>