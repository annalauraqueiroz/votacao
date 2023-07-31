<html>
	  
<head>
	<meta http-equiv="Content-Type">
	<title>Cadastro de Partidos</title>
</head>

<body>

	<?php
		include_once("conexao.php");
		
		$sigla = trim($_POST['Sigla']);
		$nomePartido = trim($_POST["NomePartido"]);			
		$camposOk = true;
							
		if($sigla == null) {
			echo "Campo sigla não informado" . "<BR>";
			$camposOk = false;
		} 
		
		if($nomePartido == null) {
			echo "Campo Nome do Partido não informado" . "<BR>";
			$camposOk = false;
		}
		
		if($camposOk == true){
			echo "<h1>Os dados informados foram:</h1>";
			
			echo "Sigla: $sigla<BR>";
			echo "Nome do Partido: $nomePartido<BR>";
			
			$sql = "INSERT INTO Partidos(sigla,nome)
				VALUES ('".$sigla."','".$nomePartido."');";
			
			$res = mysqli_query($con, $sql)  
			or die("Erro ao inserir:<BR>" . mysqli_error($con));
		}		
	?>
	
</body>

</html>