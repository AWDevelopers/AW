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
					<form action="includes/formProcesaAniadirNoticia.php" method="POST">
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
                        <p> Imagen:<input id="file_url" type="file" name="imagen"> </p>
						<p><input type="submit" name="button" value="Nueva Noticia"></p>
					</form>
					
				</div>
				
		</div>
	</body>
</html>
