<html>
	  
<head>
	<meta http-equiv="Content-Type">
	<title>Realizar eleição</title>
</head>

<body>

	<FORM name="cadEleicao" action="http://localhost/votacao/cadEleicaoBd.php"
			method="POST" enctype="application/x-www-form-urlencoded">
		<table width="100%">
		<tr>
				<th>ID Voto:</th>
				<td><input type="text" name="IDVoto" maxlength="14"></td>
			</tr>	
			<tr>
				<th width="18%">Id do candidato:</th>
				<td width="82%"><select name="listIdCandidatos">
						<option value="0">Selecione</option>
						<?php
							include_once("listagens.php");
							$res = lista('Candidatos');
							
							while ($x = mysqli_fetch_assoc($res)){
								$id = $x['id_candidato'];
							//	$nomePartido = $x["nome"];		
								
								echo "<option value='$id'>$id </option>";
							}
						?></td>
			</tr>
			<tr>
				<th>Ano:</th>
				<td><input type="text" name="Ano" maxlength="14"></td>
			</tr>	
			<tr>
				<th>CPF do eleitor:</th>
				<td><input type="text" name="CPFEleitor" maxlength="14"></td>
				</td>
			</tr>
			<tr>
			<td> <input type="submit" value="enviar"> </td></tr>
			</table>
	</FORM>

</body>

</html>