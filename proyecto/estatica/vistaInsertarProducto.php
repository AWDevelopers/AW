<!DOCTYPE html>
<html>
<head>
	<title>Proyectos ONGS</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
		<link rel="stylesheet" type="text/css" href="css/colorsandtext.css"/>
	<!--<link rel="stylesheet" type="text/css" href="css/proyectosONG.css">-->
</head>
<body>
	<div id='contenedor'>
		<!--Aqui va el menu y la cabecera que es comun-->
		<?php require 'common.php'; ?>
		
		<!--Aqui va el contenido-->
		<div class="contenido">
			<?php
					use \AW\proyecto\estatica\includes\Aplicacion as App;
					$app = App::getSingleton();
					if ($app->usuarioLogueado()  && $app->tieneRol("Admin")) {
			?>
			<div class="formulario">
				<form action="includes/formInsertarProducto.php" method="POST">
				<div class="contenido2">
					
						<div id="formulariosTitulo"><p><h1> Formulario para insertar producto </font></h1></p></div>
					  <p><h2>Nombre del producto</h2></p>
					  	<input type="text" name="NOMBRE" required></input>
					  <p><h2>Precio</h2></p>
					  	<input type="text" name="PRECIO"></input> 
					  <p><h2>Descripción corta</h2></p>
						<input type="text" name="DCORTA" required></input>
					  <p><h2>Descripción larga</h2></p>
						<input type="text" name="DLARGA" required></input>
					  <p><h2>Número de unidades</h2></p>
						<input type="text" name="STOCK" required></input>
					  <p><h2>Imagen</h2></p>
					  <input id="file_url" type="file" name="IMAGEN"></input>
					  <p><input type="submit" ></p>
				</div>
				<div>
					</form>
				</div>
			<?php	
			}
			?>
		</div>
	</div>
</body>
</html>