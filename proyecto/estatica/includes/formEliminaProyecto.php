<?php
include (RAIZ.RUTA_INC.'config.php');
use \AW\proyecto\estatica\includes\Aplicacion as App;
require_once RAIZ.RUTA_MODEL.'GestorProyectos.php';
$app = App::getSingleton();
	
	if ($app->usuarioLogueado() && $app->tieneRol("Admin","Error", "No tienes permisos")) {
		$lista = new GestorProyectos();
		$idProyecto = $_REQUEST['id'];
		$lista->eliminarProyecto($idProyecto);
	}
?>