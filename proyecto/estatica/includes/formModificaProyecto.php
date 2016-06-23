<!DOCTYPE html>
<html>
<head>
	<title> Modificar proyecto </title>
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
						<form action="registrate.php"><input type="submit" value="A�adir Usuario"></input></form>
					</div>			
				<?php 
					use \AW\proyecto\estatica\includes\Aplicacion as App;
					$app = App::getSingleton();
					if ($app->usuarioLogueado() && $app->tieneRol("Admin")) {
						require_once "includes/ViewScripts/UsuariosVista.php";
						$vUsuarios = new UsuariosVista();
						$vUsuarios->muestraYmodifica($_REQUEST ['id']);
					}
				?>
			</div>
		</div>
		
	</div>
</body>
</html>