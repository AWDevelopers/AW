<!DOCTYPE html>
<html>
<head>
	<title> Panel de Administracion de Usuarios</title>
	<link rel = "stylesheet" type = "text/css" href="css/colorsandtext.css"/>
		<link rel = "stylesheet" type = "text/css " href="css/estilos.css"/>


</head>

<body>
	<div id = 'contenedor'>
		<?php require 'common.php'; ?>
		
			<div class = "contenido">
			<div id = "panelUsuarios">
				<form action="panelAdmin.php"><input type="submit" value="Atras"></input></form>				
				<form action="vistaAniadirUsuario.php"><input type="submit" value="Añadir Usuario"></input></form>
				<?php 
					require_once "includes/ViewScripts/UsuariosVista.php";
					$vUsuarios = new UsuariosVista();
					$vUsuarios->muestraUsuarios();
				?>
			</div>
		</div>
		
	</div>
</body>
</html>
