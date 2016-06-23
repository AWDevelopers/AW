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
			<div id="proyectoONG">
				<div class="formulario">
				<form action="includes/formProductos.php" method="POST">
				  <p>Nombre del producto
				  	<input type="text" name="nombre" required></input></p>
				  <p>Nombre de la Ong
				  	<input type="text" name="nombreONG" required></input></p>
				  <p>Precio
				  	<input type="text" name="precio"></input> </p>
				  <p>Descripción corta
					<input type="text" name="descCorta" required></input></p>
				  <p>Descripción larga
					<input type="text" name="descLarga" required></input></p>
				  <p>Número de unidades
					<input type="text" name="stock" required></input></p>
				  <p>Imagen
				  <input id="file_url" type="file" name="imagen"> (*)</input>
				  <p><input type="submit" name="producto" value="INSERTAR"></p>
				  </form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>