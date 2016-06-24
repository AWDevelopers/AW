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
						<form action="vistaInsertarOng.php"><input type="submit" value="Añadir ONG"></input></form>
						<form action="vistaEliminarOng.php"><input type="submit" value="Eliminar ONG"></input></form>
						<!--<form action="vistaModificarNombreOng.php"><input type="submit" value="Modificar Nombre"></input></form>
						<form action="vistaModificarCifOng.php"><input type="submit" value="Modificar Cif"></input></form>
						<form action="vistaModificarTelefonoOng.php"><input type="submit" value="Modificar Telefono"></input></form>
						<form action="vistaModificarDireccionOng.php"><input type="submit" value="Modificar Direccion"></input></form>
						<form action="vistaModificarEmailOng.php"><input type="submit" value="Modificar Email"></input></form>-->
					</div>
						
				<?php
					use \AW\proyecto\estatica\includes\Aplicacion as App;
					$app = App::getSingleton();
					if ($app->usuarioLogueado() && $app->tieneRol("Admin")) {
						require_once "includes/ViewScripts/OngsVista.php";
						$vONGs = new vistaOng();
						$vONGs->muestraOngs();//Falta, lista con botoncitos de todas las ongs de la pagina
					}
				?>
			</div>
		</div>
		
	</div>
</body>
</html>