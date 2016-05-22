<!DOCTYPE html>
<html>
<head>
	<title>Proyectos ONGS</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
		<link rel="stylesheet" type="text/css" href="css/colorsandtext.css"/>
	<!--<link rel="stylesheet" type="text/css" href="css/estilosSilviaDonaciones.css">-->
</head>
<body>
	<div id='contenedor'>
		<!--Aqui va el menu y la cabecera que es comun-->
		<?php require 'common.php'; ?>
		
		<!--Aqui va el contenido-->
		<div class="contenido">

		<?php

			$mysqli = new mysqli('localhost', 'root', '', 'incommong');

			// ¡Oh, no! Existe un error 'connect_errno', fallando así el intento de conexión
			if ($mysqli->connect_errno) {
			    echo "Lo sentimos, este sitio web está experimentando problemas.";
			    echo "Error: Fallo al conectarse a MySQL debido a: \n";
			    echo "Errno: " . $mysqli->connect_errno . "\n";
			    echo "Error: " . $mysqli->connect_error . "\n";
			    exit;
			}

			// Realizar una consulta SQL
			$sql = "SELECT nombre, descripcionCorta, imagen FROM proyecto";
			if (!$resultado = $mysqli->query($sql)) {
			    // ¡Oh, no! La consulta falló. 
			    echo "Lo sentimos, este sitio web está experimentando problemas.";

			    // De nuevo, no hacer esto en un sitio público, aunque nosotros mostraremos
			    // cómo obtener información del error
			    echo "Error: La ejecución de la consulta falló debido a: \n";
			    echo "Query: " . $sql . "\n";
			    echo "Errno: " . $mysqli->errno . "\n";
			    echo "Error: " . $mysqli->error . "\n";
			    exit;
			}
			 while ($row = $resultado->fetch_assoc()) {
			 	echo "<div class='contenidoDonaciones'>";
			  		 echo "<h1>" . $row [ "nombre" ] . "</h1>";
			  		 echo "<div class='imgDonaciones'>";
			  		 	/*if($row [ "imagen" ] != null){
			  		 		echo '<a href="donaciones.php"> <img src="'.  $row [ "imagen" ]. ' alt="" > </a>';
			  		 	}
			  		 	else{*/
			  		 		echo '<a href="donaciones.php"> <img src="img/panda.png" > </a>';
			  		 	//}
			  		 	echo "<p>".  $row [ "descripcionCorta" ] . "</p>";
			  		 	echo '<button type="button">DONAR</button> </div>';
			  		echo "</div>";
   			 }

			// El script automáticamente liberará el resultado y cerrará la conexión
			// a MySQL cuando finalice, aunque aquí lo vamos a hacer nostros mismos
			$resultado->free();
			$mysqli->close();

		?>
		</div>
	</div>
</body>
</html>
