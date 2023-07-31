<html>
	  
<head>
	<meta http-equiv="Content-Type">
	<title>Listagem de Eleições</title>
	<?php

	?>
</head>

<body>

	<?php
		include_once("listagens.php");
		
		$res = lista("Eleicao");
		
		echo "<table border='1'>";
		echo "<tr>";		
		echo "<td>ID Voto</td><td>Id Candidato</td><td>Ano </td><td>CPF eleitor </td>";
		echo "</tr>";
		
		
		while ($x = mysqli_fetch_assoc($res)){

			$idVoto = $x['id_voto'];
			$idCand = $x['id_candidato'];
			$ano = $x['ano'];
			$cpf = $x["cpf_eleitor"];		
			
			echo "<tr>";		
			echo "<td>".$idVoto."</td><td>".$idCand."</td><td>".$ano."</td>"."<td>".$cpf."</td>";
			echo "</tr>";
		}
		
		echo "</table>";
		include_once("desconecta.php");
	?>
	
</body>

</html>