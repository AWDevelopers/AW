<!DOCTYPE html>
<html>
<head>
	<title> Panel de Administracion de Productos</title>
	<link rel = "stylesheet" type = "text/css" href="css/colorsandtext.css"/>
		<link rel = "stylesheet" type = "text/css " href="css/estilos.css"/>


</head>

<body>
	<div id = 'contenedor'>
		<?php require 'common.php'; ?>	
			<div class = "contenido">
			<div id = "panelUsuarios">
				<form action="panelAdmin.php"><input type="submit" value="Atras"></input></form>
				<form action="vistaAniadirProducto.php"><input type="submit" value="Añadir Producto(aun no está)"></input></form><!--Falta la vista para añadir profucto-->				
				<?php 
					require_once "includes/ViewScripts/ProductosVista.php";
					$vProyectos = new vistaProductos();
					$vProyectos->muestraProductos();
				?>
			</div>
		</div>
		
	</div>
</body>
</html>
