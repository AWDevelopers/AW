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
				<video id="videoPrincipal" autoplay controls> 
				<source src="videos/videOng.webm" type="video/webm">
					Your browser does not support HTML5 video.
				</video>

				<h1>Noticias</h1>
				<?php
					if (isset($_SESSION['login']) && $_SESSION['login']) {
						echo '<p><a href="vistaAniadirNoticia.php">Añade una nueva noticia</a></p>';
					}
				?>
				
				<div class="principal">
					<img src="img/principal.jpg">
					<h2>principal</h2>
					<p>Texto</p>
				</div>
				<div class="principal">
					<img src="img/llavero.jpg">
					<h2>llavero</h2>
<<<<<<< HEAD
					<p>Texto</p>
				</div>
				<div class="principal">
					<img src="img/medicos.jpg">
					<h2>medicos</h2>
					<p>Texto</p>
				</div>
				<script>
					var slideIndex = 0;
					carousel();
=======
					<p>Texto</p>
				</div>
				<div class="principal">
					<img src="img/medicos.jpg">
					<h2>medicos</h2>
					<p>Texto</p>
				</div>
				<script>
					var slideIndex = 0;
					carousel();

>>>>>>> f81214267b672be7824229e04cbd13ba93a511bc
					function carousel() {
					    var i;
					    var x = document.getElementsByClassName("principal");
					    for (i = 0; i < x.length; i++) {
					      x[i].style.display = "none";
					    }
					    slideIndex++;
					    if (slideIndex > x.length) {slideIndex = 1}
					    x[slideIndex-1].style.display = "block";
					    setTimeout(carousel, 5000);
<<<<<<< HEAD
=======

>>>>>>> f81214267b672be7824229e04cbd13ba93a511bc
					}
				</script>
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