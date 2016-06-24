<?php
include (RAIZ.RUTA_INC.'config.php');
if (!isset($_SESSION)) session_start();
require_once RAIZ.RUTA_MODEL.'GestorUsuarios.php';
	use \AW\proyecto\estatica\includes\Aplicacion as App;
	$app = App::getSingleton();
	if($app->usuarioLogueado() && $app->tieneRol("Admin")){
			$lista = new GestorUsuarios();
			$dni = $_REQUEST['id'];
			$nombre = $_REQUEST['nombre'];
			$apellidos = $_REQUEST['apellidos'];
			$email = $_REQUEST['email'];
			$telefono = $_REQUEST['tlf'];
			$direccion = $_REQUEST['direccion'];
			$cp = $_REQUEST['cp'];
			$tipo = $_REQUEST['tipo'];
			$avatar = $_REQUEST['foto'];
			$sexo = $_REQUEST['sexo'];
			$usuario = $_REQUEST['usuario'];
			$fecha = $_REQUEST['fecha'];
			echo $usuario;
			$lista->modificarPerfilUser($dni, $nombre, $apellidos, $email, $telefono, $direccion, $cp, $tipo, $avatar, $sexo, $usuario, $fecha);
			header("Location: "RAIZ.RUTA_APP."vistaAdminUsuarios.php");
			exit();
	}

?>