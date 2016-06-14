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
					<form action="includes/modificarDireccionOng.php" method="POST">
						<p>Dirección ACTUAL de la Ong
						<input type="text" name="dir_actual" required value = "<?= $_GET['data']?> " ></input></p>
						<p>Dirección NUEVO de la Ong
						<input type="text" name="dir_nuevo" required></input></p>
						<p><input type="submit" name="submit" value="Modificar Dirección"></p>
					</form>
					
				</div>
				
		</div>
	</body>
</html>
