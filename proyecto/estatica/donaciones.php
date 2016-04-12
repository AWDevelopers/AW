<!DOCTYPE html>
<html>
<head>
	<title>Pagina con estilos</title>
	<link rel="stylesheet" type="text/css" href="estilos.css"/>
	<link rel="stylesheet" type="text/css" href="donacion.css"/>
</head>
<body>
	<div id='contenedor'>
		<?php require 'common.php'; ?>
		<div id="contenido">
			<div id = 'fundacion'>
				<h1 align="center">Nombre ONG/Fundacion</h1>
			</div>
			<div id = 'imagenONG'>
				<p align= "center"><img src="img/imagen.png" width="600" /></p>
				<h4 align="center">Descripcion</h4>
				<center>
				<p>Nananananananananananannannanananananananannananananannananananannananananananananananananananananan
				nananananananananananannannanananananananannananananannananananannananananananananananananananananan
				nananananananananananannannanananananananannananananannananananannananananananananananananananananan
				nananananananananananannannanananananananannananananannananananannananananananananananananananananan</p>
				</center>
			</div>
			<div id = "recaudado">
				<center>
					<div id= "recaudacion">Recaudacion: 89.536 euros</div>
					<div id= "meta">Meta: 100.000 euros</div>
					<div id= "cantidad"> Cantidad: 355 euros</div>
				</center>
			</div>
			<div class="progress">
			  <div class="progress-bar" role="progressbar" aria-valuenow="60"
			       aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
			    <span class="sr-only">60% completado</span>
			  </div>
			</div>
			<div id ="boton">
				<center>
				<p><input type= "submit" value = "Donar"></p>
				</center>
			</div>
		</div>
	</div>
</body>
</html>