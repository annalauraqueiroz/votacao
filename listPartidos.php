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
		
		$res = lista("Partidos");
		

		echo "<table border='1'>";
		echo "<tr>";		
		echo "<td>Sigla</td><td>Nome</td>";
		echo "</tr>";
		
		
		while ($x = mysqli_fetch_assoc($res)){

			$nome = $x['nome'];
			$sigla = $x["sigla"];		
			
			echo "<tr>";		
			echo "<td>".$sigla."</td><td>".$nome."</td>";
			echo "</tr>";
		}
		
		echo "</table>";
		include_once("desconecta.php");
	?>
	
</body>

</html>