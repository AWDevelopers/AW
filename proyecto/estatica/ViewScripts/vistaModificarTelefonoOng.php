<!DOCTYPE html>
<html>
	<head>
		<title>Modificad datos ONG - InCommOng</title>
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
					<form action="includes/modificarTelefonoOng.php" method="POST">
						<p>Teléfono ACTUAL de la Ong
						<input type="text" name="tlf_actual" required value = "<?= $_GET['data']?> " ></input></p>
						<p>Teléfono NUEVO de la Ong
						<input type="text" name="tlf_nuevo" required></input></p>
						<p><input type="submit" name="submit" value="Modificar Telefono"></p>
					</form>
					
				</div>
				
		</div>
	</body>
</html>
