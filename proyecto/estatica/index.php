<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css"/>
		<link rel="stylesheet" type="text/css" href="css/colorsandtext.css"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div id='contenedor'>
		<?php require 'common.php'; ?>
		<!--<div id="cabecera">
			<div class="avatar">
				<IMG SRC="img/usuarioSF.png" WIDTH=120 HEIGHT=120 ALT="Avatar usuario">
			</div>
			<div class="sesion">
				<IMG SRC="img/power.png" WIDTH=60 HEIGHT=60 ALT="Avatar usuario">
			</div>
		</div>
		<div id="sidebar-left">
			<ul>
				<li><a href="index.html">Inicio</a></li>
            	<li><a href="#">Donaciones</a></li>
            	<li><a href="#">Voluntarios</a></li>
            	<li><a href="conocenos.html">Conocenos</a></li>
            	<li><a href="#">Tienda</a></li>
        	</ul>
		</div> 
		-->
		<div class="contenido">
			<div id="noticias">
				<video id="videoPrincipal" src="videos/videOng.webm" autoplay controls preload> </video>

				<h1>Noticias</h1>
				
				<div class="principal">
					<img src="img/principal.jpg">
					<h2>Titulo principal</h2>
					<p>Texto</p>
				</div>
				<div class="bloque_secundaria">
					<div class="secundaria">
						<img src="img/imgSecundaria.jpeg">
						<h3>Titulo secundaria</h3>
						<p>Texto</p>
					</div>
					<div class="secundaria">
						<img src="img/imgSecundaria2.jpeg">
						<h3>Titulo secundaria</h3>
						<p>Texto</p>
					</div>
				</div>
				<div class="bloque_terciaria">
					<div class="terciaria">
						<img src="img/imgTerciaria.jpeg">
						<h4>Titulo terciaria</h4>
						<p>Texto</p>
					</div>
					<div class="terciaria">
						<img src="img/imgTerciaria2.jpeg">
						<h4>Titulo terciaria</h4>
						<p>Texto</p>
					</div>
					<div class="terciaria">
						<img src="img/imgTerciaria3.jpeg">
						<h4>Titulo terciaria</h4>
						<p>Texto</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>