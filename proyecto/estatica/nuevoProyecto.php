<!DOCTYPE html>
<html>
	<head>
		<title>Nuevo Proyecto - InCommOng</title>
		<link rel="stylesheet" type="text/css" href="css/estilos.css"/>
		<link rel="stylesheet" type="text/css" href="css/colorsandtext.css"/>
		
		<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
		<script type="text/javascript">
		$(document).ready(function() {    
		    $('#cif').blur(function(){

		        $('#Info').html('<img src="img/loader.gif" alt="" />').fadeOut(1000);

		        var username = $(this).val();        
		        var dataString = 'cif='+username;

		        $.ajax({
		            type: "POST",
		            url: "includes/checkCif.php",
		            data: dataString,
		            success: function(data) {
		                  $('#Info').html(data).fadeIn(1000);
		            }

		        });
		    });              
		});    
		</script>

	</head>
	<body>

		<div id='contenedor'>
			<!--Aqui va el menu y la cabecera que es comun-->
			<?php require 'common.php'; ?>
		</div>
		<!--CONTENIDO-->

			<div class="contenido">
<<<<<<< HEAD
					<form id="formNuevoProyecto" gaction="includes/formNuevoProyecto.php" method="POST">
					<div class="contenido2">	
						<p><h1><font color = "white">Formulario para un nuevo proyecto</font></h1></p>
						<p><h2>Nombre del proyecto: </h2></p>
						<input type="text" name="nombre" required></input>
						<p><h2>CIF Ong: </h2></p>
						<input id="cif" type="text" name="cif" required></input><div id="Info"></div>
						<p><h2>Imagen: </h2></p>
						<input id="file_url" type="file" name="foto">
						<p><h2>Dinero necesario: </h2></p>
						<input type="number" name="dinero"></input>
						<p><h2>Voluntarios necesarios: </h2></p>
						<input type="number" name="voluntarios"></input>
						<p><h2>Descripcion corta: </h2></p>
						<textarea name="descripcionCorta" rows="4" placeholder= "Descripcion corta."></textarea>
						<p><h2>Descripcion larga: </h2></p>
						<textarea name="descripcionLarga" rows="10" placeholder= "Descripcion larga..."></textarea>
=======
					<form id="formNuevoProyecto" action="includes/formNuevoProyecto.php" method="POST">
						<p>Nombre del proyecto</p>
						<input type="text" name="nombre" required>*</input>
						<p>CIF Ong</p>
						<input id="cif" type="text" name="cif" required>*</input><div id="Info"></div>
						<p>Imagen</p>
						<input id="file_url" type="file" name="foto">
						<p>dinero necesario</p>
						<input type="number" name="dinero" required>*</input>
						<p>Voluntarios necesarios</p>
						<input type="number" name="voluntarios" required>*</input>
						<p>Fecha de finalizacion</p>
						<input type="date" name="fechaFin" required>*</input>
						<p>descripcion corta</p>
						<textarea name="descripcionCorta" rows="4">Introduce descripcion corta...</textarea>
						<p>descripcion larga</p>
						<textarea name="descripcionLarga" rows="10">Introduce descripcion larga...</textarea>
>>>>>>> f81214267b672be7824229e04cbd13ba93a511bc

						<p><input type="submit" name="button" value="NUEVO"></p>
					</div>
					</form>

		</div>
	</body>
</html>
