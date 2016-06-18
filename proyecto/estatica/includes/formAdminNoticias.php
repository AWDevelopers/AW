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
			<div id = panelNoticias">
				<button><a href=panelAdmin.php>Atras</a></button><!--boton atras-->
				<input type="submit" ><!--crear noticia hecho? o no?-->
				<?php 
					require_once "includes/ViewScripts/NoticiasVista.php";
					$vNoticias = new NoticiasVista();
					$vNoticias->muestraNoticiasPrimarias();
					$vNoticias->muestraNoticiasSecundarias();
					$vNoticias->muestraNoticiasTerciarias();
					$vNoticias->muestraNoticiasOtras();
				?>
	
			</div>
		</div>
		
	</div>
</body>
</html>
