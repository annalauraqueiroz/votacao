<html>
	  
<head>
	<meta http-equiv="Content-Type">
	<title>Cadastro dos partidos</title>
</head>

<body>

	<FORM name="cadPartido" action="http://localhost/votacao/CadPartidoBd.php"
			method="POST" enctype="application/x-www-form-urlencoded">
		<table width="100%">
			<tr>
				<th width="18%">Sigla do partido:</th>
				<td width="82%"><input type="text" name="Sigla"></td>
			</tr>
			<tr>
				<th>Nome do partido:</th>
				<td><input type="text" name="NomePartido" maxlength="50"></td>
			</tr>	
			
		</table>
			<input type="submit" value="enviar">
	</FORM>

</body>

</html>