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
				<form action="formAdminVoluntarios.php"><input type="submit" value="Atras"></input></form>				
				<?php 
					require_once "includes/ViewScripts/VoluntariosVista.php";
					$vVoluntarios = new voluntariosVista();
					$vVoluntarios->muestraVoluntariosProyecto(idProyecto);//esto falta, habría que mostrar la lista de los usuarios y meterle los botones de eliminar y modificar
				?>
			</div>
		</div>
		
	</div>
</body>
</html>
