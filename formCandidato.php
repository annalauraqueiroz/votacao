<html>
	  
<head>
	<meta http-equiv="Content-Type">
	<title>Cadastro dos candidatos</title>
</head>

<body>

	<FORM name="cadCandidato" action="http://localhost/votacao/cadCandidatoBd.php"
			method="POST" enctype="application/x-www-form-urlencoded">
		<table width="100%">
			<tr>
				<th width="18%">Id do candidato:</th>
				<td width="82%"><input type="text" name="ID"></td>
			</tr>
			<tr>
				<th>Nome do candidato:</th>
				<td><input type="text" name="Nome" maxlength="14"></td>
			</tr>	
			<tr>
				<th>Sigla do partido:</th>
				<td><select name="listPartidos">
						<option value="0">Selecione</option>
						<?php
							include_once("listagens.php");
							$res = lista('Partidos');
							
							while ($x = mysqli_fetch_assoc($res)){
								$sigla = $x['sigla'];
								$nomePartido = $x["nome"];		
								
								echo "<option value='$sigla'>$nomePartido ($sigla)</option>";
							}
						?>
				</td>
			</tr>
			
			<tr><td><input name="enviarbtn" type="submit" value="enviar"/></td></tr>				
		</table>

	</FORM>

</body>

</html>