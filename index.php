<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <link rel="stylesheet" href="css\estiloindex.css">
    <title>Mi aula cucei</title>
</head>
	<div class="tit"><h2>Inicio de sesión</h2>
		<div class="Ingreso">
		<tr>
		<td rowspan=1>
		<form action="php/validar.php" method="post">
		<table>
		<tr><td><label><b>Código alumno/maestro: </b></label></td>
			<td width=80> <input class="form-group has-success" style="border-radius:15px;" type="text" name="usuario"></td></tr>
		<tr><td><label><b>Contraseña: </b></label></td>
			<td witdh=80><input style="border-radius:15px;" type="password" name="pass"></td></tr>
		</tr></table>
                <center>
                <input type="submit" value="Aceptar" id="boton">
                </center>
    </td>
            
		</form>


	
</body>
</html>