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
			<div class="insertarprod">
				<form action="includes/formInsertarProducto.php" method="POST">
				  <p>Nombre del producto</p>
				  	<input type="text" name="NOMBRE" required></input>
				  <p>Precio</p>
				  	<input type="text" name="PRECIO"></input> 
				  <p>Descripción corta</p>
					<input type="text" name="DCORTA" required></input>
				  <p>Descripción larga</p>
					<input type="text" name="DLARGA" required></input>
				  <p>Número de unidades</p>
					<input type="text" name="STOCK" required></input>
				  <p>Imagen</p>
				  <input id="file_url" type="file" name="IMAGEN"></input>
				  <p><input type="submit" ></p>
				</form>
			</div>
		</div>
	</div>
</body>
</html>