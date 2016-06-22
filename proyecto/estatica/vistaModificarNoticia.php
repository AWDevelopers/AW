<!DOCTYPE html>
<html>
	<head>
		<title>Modifica una noticia - InCommOng</title>
		<link rel="stylesheet" type="text/css" href="css/estilos.css"/>
		<link rel="stylesheet" type="text/css" href="css/colorsandtext.css"/>
		
	</head>
	<body>
		<div id='contenedor'>
			<!--Aqui va el menu y la cabecera que es comun-->
			<?php require 'common.php'; ?>
		</div>
		<!--CONTENIDO-->

		
			<div class="contenido">
				<div class="formulario">
					<form action="includes/formProcesaModificarNoticia.php?id=<?=$_GET['id']?>" method="POST">
						<div class="contenido2">
						
						
							<div id="formulariosTitulo"><p><h1> Formulario para editar una noticia </font></h1></p></div>
							
								<p><h2>Titulo de la noticia:</h2> </p>
								<input type="text" name="titulo" value="<?= $_GET['titulo']?>" required> (*)</input>
								<p><h2>Tipo de la noticia: </h2></p>
								<select name="tipo">
									<option value="primaria">Primaria</option>
									<option value="secundaria">Secundaria</option>
									<option value="terciaria">Terciaria</option>
									<option value="otras">Otras</option>
								</select> (*)</p>
								<p><h2> Descripción corta de la noticia (*):</h2> </p>
								<textarea name="desCorta" rows="4" placeholder= "Descripcion corta." value="<?= $_GET['des_corta']?>" ></textarea>
								<p><h2> Descripción larga de la noticia: </h2> </p>
								<textarea name="desLarga" rows="10" placeholder= "Descripcion larga de la noticia..." value="<?= $_GET['des_larga']?>" ></textarea>			
								<p><h2> Fecha de la noticia:</h2></p>
								<input type="date" name="fecha" value="<?= $_GET['fecha']?>"> (*)</input>
								<p><h2> Nombre de la imagen: </h2></p>
								<input type="text" name="imagen" value="<?= $_GET['imagen']?>"> (*)</input>
								<p><input type="submit" name="button" value="Editar"></p>
							</div>
						<div>

					</form>
					
				</div>
				
		</div>
	</body>
</html>
