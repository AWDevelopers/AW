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
<<<<<<< HEAD
		
			<div class="contenido">
				<div class="formulario">
					<form action="includes/formProcesaAniadirNoticia.php" method="POST">
						<div class="contenido2">
						
						
							<div id="formulariosTitulo"><p><h1> Formulario para una nueva noticia </font></h1></p></div>
							
								<p><h2>Titulo de la noticia:</h2> </p>
								<input type="text" name="titulo" required></input>
								<p><h2>Tipo de la noticia: </h2></p>
								<select name="tipo">
									<option value="primaria">Primaria</option>
									<option value="secundaria">Secundaria</option>
									<option value="terciaria">Terciaria</option>
									<option value="otras">Otras</option>
								</select></p>
								<p><h2> Descripción corta de la noticia:</h2> </p>
								<textarea name="descripcionCorta" rows="4" placeholder= "Descripcion corta." ></textarea>
								<p><h2> Descripción larga de la noticia: </h2> </p>
								<textarea name="descripcionLarga" rows="10" placeholder= "Descripcion larga de la noticia..." ></textarea>			
								<p><h2> Fecha de la noticia:</h2> </p>
								<input type="date" name="fecha"></input>
								<p><h2> Nombre de la imagen: </h2></p>
								<input type="text" name="imagen"></input>
								<p><input type="submit" name="button" value="Nueva Noticia"></p>
							</div>
						<div>
=======

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
>>>>>>> 4f1e2c7096aa70d140c8aa0a7e74382a7d326600
					</form>
					
				</div>
				
		</div>
	</body>
</html>
