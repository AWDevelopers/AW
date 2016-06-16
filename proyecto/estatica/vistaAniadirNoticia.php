<!DOCTYPE html>
<html>
	<head>
		<title>Añade una noticia - InCommOng</title>
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
					<form action="includes/aniadirNoticia.php" method="POST">
						<p>Titulo de la noticia
						<input type="text" name="titulo" required></input></p>
						<p>Tipo de la noticia
						<select name="tipo">
							<option value="primaria">Primaria</option>
							<option value="secundaria">Secundaria</option>
							<option value="terciaria">Terciaria</option>
							<option value="otras">Otras</option>
						</select></p>
						<p>Descripción corta de la noticia
						<input type="text" name="desCorta"></input> </p>
						<p>Descripción larga de la noticia
						<input type="text" name="desLarga"></input></p>
						<p>Fecha de la noticia
						<input type="date" name="fecha"></input></p>
						<p><input type="submit" name="submit" value="Añadir noticia"></p>
					</form>
					
				</div>
				
		</div>
	</body>
</html>
