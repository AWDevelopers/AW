<!DOCTYPE html>
<html>
<head>
	<title> Panel de Administracion de Noticias</title>
	<link rel = "stylesheet" type = "text/css" href="css/colorsandtext.css"/>
		<link rel = "stylesheet" type = "text/css " href="css/estilos.css"/>


</head>

<body>
	<div id = 'contenedor'>
		<?php require 'common.php'; ?>
		
			<div class = "contenido">
			<div class = "panelNoticias">
				<!--Estos dos botones deberían ser imagenes-->
				<div class="atrasYAniade">
					<div class="atras">
						<form action="panelAdmin.php"><input type="submit" value="Atras"></input></form>
					</div>
					<div class="aniade">
						<form action="vistaAniadirNoticia.php"><input type="submit" value="Añadir Noticia"></input></form>
					</div>				
					
				</div>
				<?php 
					require_once "includes/ViewScripts/NoticiasVista.php";
					$vNoticias = new NoticiasVista();
					$vNoticias->muestraNoticiasAdmin();
				?>
			</div>
		</div>
		
	</div>
</body>
</html>
