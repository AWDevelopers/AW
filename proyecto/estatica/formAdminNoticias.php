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
			<div id = "panelNoticias">
				<form action="panelAdmin.php>"><input type="submit" value="Atras"></input></form>				
				<button>Añadir noticia</button><!--crear noticia hecho? o no?-->
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
