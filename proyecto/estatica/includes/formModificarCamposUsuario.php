<?php
include (RAIZ.RUTA_INC.'config.php');
if (!isset($_SESSION)) session_start();
require_once RAIZ.RUTA_MODEL.'GestorUsuarios.php';
	use \AW\proyecto\estatica\includes\Aplicacion as App;
	$app = App::getSingleton();
	if($app->usuarioLogueado() ){
			$lista = new GestorUsuarios();
			$dni = $_REQUEST['id'];
			$nombre = $_REQUEST['nombre'];
			$apellidos = $_REQUEST['apellidos'];
			$email = $_REQUEST['email'];
			$telefono = $_REQUEST['telefono'];
			echo $dni;
			echo $nombre;
			echo $apellidos;
			echo $email;
			echo $telefono;
			$lista->modificarCamposUsuario( $dni , $nombre, $apellidos, $email, $telefono);
			header("Location: "RAIZ.RUTA_APP."index.php");
			exit();
	}

?>