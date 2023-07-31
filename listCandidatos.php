<html>
	  
<head>
	<meta http-equiv="Content-Type">
	<title>Listagem de Partidos</title>
	<?php

	?>
</head>

<body>

	<?php
		include_once("listagens.php");
		
		$res = lista("Candidatos");
		
		$count = mysqli_num_rows($res);
		
		echo "O total de candidatos é: ".$count.".<br><br>";
		
		echo "<table border='1'>";
		echo "<tr>";		
		echo "<td>ID</td><td>Nome</td><td>Partido</td>";
		echo "</tr>";
		
		
		while ($x = mysqli_fetch_assoc($res)){

			$id = $x['id_candidato'];
			$nome = $x['nome'];
			$sigla = $x["sigla_partido"];		
			
			echo "<tr>";		
			echo "<td>".$id."</td><td>".$nome."</td><td>".$sigla."</td>";
			echo "</tr>";
		}
		
		echo "</table>";
		include_once("desconecta.php");
	?>
	
</body>

</html>