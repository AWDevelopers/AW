<!DOCTYPE html>
<html>
<head>
	<title> Panel de Administracion de ONGS</title>
	<link rel = "stylesheet" type = "text/css" href="css/colorsandtext.css"/>
		<link rel = "stylesheet" type = "text/css " href="css/estilos.css"/>


</head>

<body>
	<div id = 'contenedor'>
		<?php require 'common.php'; ?>
		
			<div class = "contenido">
			<div id = "panelUsuarios">
				<form action="panelAdmin.php"><input type="submit" value="Atras"></input></form>
				<form action="vistaInsertarONG.php"><input type="submit" value="Añadir ONG"></input></form><!--La funcion de añadir ong da problemillas-->			
				<?php 
					require_once "includes/ViewScripts/OngsVista.php";
					$vONGs = new vistaOng();
					$vONGs->muestraOngs();//Falta, lista con botoncitos de todas las ongs de la pagina
				?>
			</div>
		</div>
		
	</div>
</body>
</html>