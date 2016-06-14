<!DOCTYPE html>
<html>
	<head>
		<title>Registra una ONG - InCommOng</title>
		<link rel="stylesheet" type="text/css" href="css/estilos.css"/>
		<link rel="stylesheet" type="text/css" href="css/colorsandtext.css"/>
		
	</head>
	<body>
		<div id='contenedor'>
			<!--Aqui va el menu y la cabecera que es comun-->
			<?php require 'common.php'; ?>
		</div>
		<!--CONTENIDO-->

			<div id="contenido">
				<div class="formulario">
					<form action="includes/aniadirOng.php" method="POST">
						<p>CIF de la Ong
						<input type="text" name="CIF" required></input></p>
						<p>Nombre de la Ong
						<input type="text" name="nombre" required></input></p>
						<p>Dirección
						<input type="text" name="direccion"></input> </p>
						<p>Email de contacto
						<input type="text" name="email" required></input></p>
						<p>Usuario
						<input type="text" name="usuario" required></input></p>
						<p>Contraseña
						<input type="text" name="pass" required></input></p>
						<p>Teléfono de contacto
						<input type="text" name="telefono"></input></p>
						<p><input type="submit" name="submit" value="Dar de alta Ong"></p>
					</form>
					
				</div>
				
		</div>
	</body>
</html>
