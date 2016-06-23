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
			<div class = "panelNoticias">
				<div class="atrasYAniade">
					<div class="atras">
						<form action="panelAdmin.php"><input type="submit" value="Atras"></input></form>
					</div>
					<div class="aniade">
							<form action="vistaAniadirProducto.php"><input type="submit" value="Añadir Producto(aun no está)"></input></form><!--Falta la vista para añadir profucto-->	
					</div>
						
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
