<?php
include ('config.php');
if (!isset($_SESSION)) session_start();
use \AW\proyecto\estatica\includes\Aplicacion as App;
require_once 'ModelScripts/GestorUsuarios.php';
$app = App::getSingleton();

	
	if ($app->usuarioLogueado() && $app->tieneRol("Admin","Error", "No tienes permisos")) {
		$lista = new GestorUsuarios();
		$dni = $_REQUEST['id'];
		$lista->eliminarUsuario($dni);
		header("Location: ../vistaAdminUsuarios.php");
		exit();
	}
?>