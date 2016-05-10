<!DOCTYPE html>
<html>
<head>
	<title>Pagina con estilos</title>
	
	<link rel="stylesheet" type="text/css" href="css/estilos.css"/>
		<link rel="stylesheet" type="text/css" href="css/colorsandtext.css"/>
	<!--<link rel="stylesheet" type="text/css" href="css/estilos.css"/>-->
</head>
<body>
	<div id='contenedor'>
		<?php require 'common.php'; ?>
		<div id="contenido">
			<div id = 'fundacion'>
				<h1 align="center">Nombre ONG/Fundacion</h1>
			</div>
			<div id = 'imagenONG'>
				<center>
				<p><img src="img/imagen.png" width="600" /></p>
				<h4>Descripcion</h4>
				
				<p>Aqui ira la descripcion de la ONG</p>
				</center>
			</div>
			<div id = "datos">
				<div id = "recaudado">
					<div id= "recaudacion">Recaudacion: 89.536 euros       Meta: 100.000 euros</div>
					<!--<div id= "meta">Meta: 100.000 euros</div>-->
					<div id = "barrainformativa">
						<p><progress value="80" max="100"></progress></p>
					</div>
				</div>
				<div id = "datoscantidad">
					<div id= "cantidad"> Cantidad:</div>
					<form action="procesarDonacion.php" method="POST">
						<p><input type="text" name="cantidad">
						<input type= "submit" name ="donar" value = "Donar" size="20">
						</p>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
