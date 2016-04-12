<!DOCTYPE html>
<html>
<head>
	<title>Pagina con estilos</title>
	
	<link rel="stylesheet" type="text/css" href="donacion.css"/>
	<link rel="stylesheet" type="text/css" href="estilos.css"/>
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
				nananananananananananannannanananananananannananananannananananannananananananananananananananananan</p>
				</center>
			</div>
			<div id = "recaudado">
				<center>
					<div id= "recaudacion">Recaudacion: 89.536 euros</div>
					<div id= "meta">Meta: 100.000 euros</div>
					<div id= "cantidad"> Cantidad:</div>
				</center>
			</div>
			<div id = "barrainformativa">
				<!--<p><img src="barraestado.png"/></p>-->
				<progress value="80" max="100"></progress>
			</div>
			<div id = "datoscantidad">
				<input type="text" name="cantidad" value="5875 euros" size="10">
			</div>
			<div id ="boton">
				<center>
				<input type= "submit" value = "Donar" size="20">
				</center>
			</div>
		</div>
	</div>
</body>
</html>