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
			<div class = "panelNoticias">
				<div class="atrasYAniade">
					<div class="atras">
						<form action="panelAdmin.php"><input type="submit" value="Atras"></input></form>
					</div>
					<div class="aniade">
						<form action="vistaInsertarONG.php"><input type="submit" value="Añadir ONG"></input></form><!--La funcion de añadir ong da problemillas-->	
					</div>
						
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