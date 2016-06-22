<!DOCTYPE html>
<html>
<head>
	<title> Panel de Administracion </title>
	<link rel = "stylesheet" type = "text/css" href="css/colorsandtext.css"/>
		<link rel = "stylesheet" type = "text/css " href="css/estilos.css"/>


</head>

<body>
	<div id = 'contenedor'>
		<?php require 'common.php'; ?>
		
		<div class = "contenido">
			<div id = "panelAdmin">
				<!--<ul>-->
					<div class="cajaAdmin"><a href="formAdminNoticias.php"><button> Noticias</button></div></a>
					<div class="cajaAdmin"><a href="formAdminVoluntarios.php"> <button> Voluntarios</button></div></a>
					<div class="cajaAdmin"><a href="formAdminProyectos.php"><button> Proyectos</button></div></a>
					<div class="cajaAdmin"><a href="formAdminUsuarios.php"><button> Usuarios</button></div></a>
					<div class="cajaAdmin"><a href="formAdminONGs.php"><button> ONGs</button></div></a>
					<div class="cajaAdmin"><a href="formAdminProductos.php"><button> Productos</button></div></a>
					
		
				<!--</ul>-->
	
			</div>
		</div>

		
		
</body>
</html>
