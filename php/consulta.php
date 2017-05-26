<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <link rel="stylesheet" href="css\estiloconsulta.css">
	<title>Consulta</title>
	<title>Consulta</title>
</head>
<body>
<div class="contenedor">
	<?php
 				
 				require("connect_db.php");
		//
 				$Edificio = $_GET["edificio"]; 
 				$Canion = $_GET["canion"]; 
 				$Internet = $_GET["internet"]; 
 				$Computadoras = $_GET["computadoras"]; 
 				$Hora_ini = $_GET["hora_ini"];
 				$Hora_fin = $_GET["hora_fin"];  
		//

 				$slq="select * from Modulo where (edificio='$Edificio') AND (canion='$Canion')
 				AND (internet='$Internet')AND (computadoras='$Computadoras')";
 				$datos=mysql_query($slq,$link);
 				echo "<table border='1'><tr><th>Edificio</th><th>Aula</th><th>Cañon</th><th>Internet</th><th>Computadoras</th><th>Inicio</th><th>Termino</th><th>Ocupado</th></tr>";
 				while ($renglon=mysql_fetch_array($datos)) {
 						
 						echo "<tr>";
 						echo "<td>" . $renglon['edificio'] . "</td>";
						echo "<td>" . $renglon['aula'] . "</td>";
						echo "<td>" . $renglon['canion'] ."</td>";
						echo "<td>" . $renglon['internet']."</td>";
						echo "<td>" . $renglon['computadoras']."</td>";
						echo "<td>" . $renglon['hora_ini']."</td>";
						echo "<td>" . $renglon['hora_fin']."</td>";
						echo "<td>" . $renglon['Ocupado']."</td>";
						echo "</tr>";
 						}		
 				echo "</table>";
 		?>

</body></html>