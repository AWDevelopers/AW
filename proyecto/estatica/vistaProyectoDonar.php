
<!DOCTYPE html>
<html>
<head>
	<title>Proyectos ONGS</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
		<link rel="stylesheet" type="text/css" href="css/colorsandtext.css"/>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<!--<link rel="stylesheet" type="text/css" href="css/estilosSilviaDonaciones.css">-->
</head>
<body>
	<div id='contenedor'>
		<!--Aqui va el menu y la cabecera que es comun-->
		<?php require 'common.php'; ?>
		
		<!--Aqui va el contenido-->
		<div class="contenido">

		<?php

			/*$mysqli = new mysqli('localhost', 'root', '', 'incommong');

			// ¡Oh, no! Existe un error 'connect_errno', fallando así el intento de conexión
			if ($mysqli->connect_errno) {
			    echo "Lo sentimos, este sitio web está experimentando problemas.";
			    echo "Error: Fallo al conectarse a MySQL debido a: \n";
			    echo "Errno: " . $mysqli->connect_errno . "\n";
			    echo "Error: " . $mysqli->connect_error . "\n";
			    exit;
			}*/

			// Realizar una consulta SQL
			$sql = "SELECT idProyecto, nombre, imagen FROM proyecto";
			if (!$resultado = $connection->query($sql)) {
			    // ¡Oh, no! La consulta falló. 
			    echo "Lo sentimos, este sitio web está experimentando problemas.";

			    // De nuevo, no hacer esto en un sitio público, aunque nosotros mostraremos
			    // cómo obtener información del error
			    echo "Error: La ejecución de la consulta falló debido a: \n";
			    echo "Query: " . $sql . "\n";
			    echo "Errno: " . $connection->errno . "\n";
			    echo "Error: " . $connection->error . "\n";
			    exit;
			}
			 while ($row = $resultado->fetch_assoc()) {
			 	echo "<div class='contenidoDonaciones'>";
			  		 echo "<h1>" . $row [ "nombre" ] . "</h1>";
			  		 //$ong = $row["idPro"];
			  		 echo "<div class='imgDonaciones'>";
			  		 	/*if($row [ "imagen" ] != null){
			  		 		echo '<a href="donaciones.php"> <img src="'.  $row [ "imagen" ]. ' alt="" > </a>';
			  		 	}
			  		 	else{*/
			  		 		//echo '<img src="img/panda.png" >';
			  		 		echo '<img src="' . $row["imagen"] . '">';
			  		 	//}
			  		 	//echo "<p>".  $row [ "descripcionCorta" ] . "</p>";
			  		 	//echo '<a href="donaciones.php><button type="button">DONAR</button> </div></a>';
			  		 	//echo '<a href="donaciones.php?var="$ong"><button type="button">DONAR</button> </div></a>';
			  		 	echo '<form name="vistaDonar" action="donaciones.php" method="POST"><input type="hidden" name="nombreProyecto" id="proyecto" value="'. $row['idProyecto'] . '"><input type="submit" value="DONAR"></form>';
			  		echo "</div>";
   			 }

			// El script automáticamente liberará el resultado y cerrará la conexión
			// a MySQL cuando finalice, aunque aquí lo vamos a hacer nostros mismos
			$resultado->free();
			$connection->close();

		?>
		</div>
	</div>
</body>
</html>
