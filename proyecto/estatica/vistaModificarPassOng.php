<!DOCTYPE html>
<html>
	<head>
		<title>Modificad datos ONG - InCommOng</title>
		<link rel="stylesheet" type="text/css" href="css/estilos.css"/>
		<link rel="stylesheet" type="text/css" href="css/colorsandtext.css"/>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	</head>
	<body>
		<div id='contenedor'>
			<!--Aqui va el menu y la cabecera que es comun-->
			<?php require 'common.php'; ?>
		</div>
		<!--CONTENIDO-->

			<div id="contenido">


				<div class="formulario">
					<form action="includes/modificarPassOng.php" method="POST">
						<p>Contraseña ACTUAL de la Ong
							<input type="text" id="passBien" name="pass_actual" required></input>
						<p>Contraseña NUEVA de la Ong
							<input type="text" id="passUno" name="pass_nuevo" required></input></p>
						<p>Repita la NUEVA contraseña
							<input type="text" id="passDos" name="pass_nuevo_dos" required></input>
						<p><input type="submit" name="submit" value="Modificar Contraseña"></p>
					</form>
					
				</div>
			</div>

	</body>
</html>
