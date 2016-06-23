<!DOCTYPE html>
<html>
<head>
	<title>Proyectos ONGS</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
		<link rel="stylesheet" type="text/css" href="css/colorsandtext.css"/>
</head>
<body>
	<div id='contenedor'>
		<!--Aqui va el menu y la cabecera que es comun-->
		<?php require 'common.php'; ?>
		
		<!--Aqui va el contenido-->
		<div class="contenido">
				<?php
					use \AW\proyecto\estatica\includes\Aplicacion as App;
					$app = App::getSingleton();
					if ($app->usuarioLogueado() && $app->esAdmin()) {
		
						require_once "includes/ViewScripts/UsuariosVista.php";
						$vista = new UsuariosVista();
						$vista->muestraUsuarios();
					}
				?>				
		</div>
			
	</div>
</body>
</html>
