<!DOCTYPE html>
<html>
	<head>
		<title>Login - InCommOng</title>
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
				<div class="imagen">
					<img src="img/nuevologo.png">
				</div>
				<div class="formulario">
					<form action="includes/comprobar_login.php" method="POST">
						<p>Usuario</p>
						<input type="text" name="usuario"></input>
						<p>Contraseña</p>
						<input type="password" name="contraseña"></input>
						<a href="index.php"><p>Olvidaste la contraseña?</p></a>
						<input type="submit" name="submit" value="Login">
					</form>
					
				</div>
				
		</div>
	</body>
</html>
