<?php
include (RAIZ.RUTA_INC.'config.php');
require_once RAIZ.RUTA_MODEL.'GestorUsuarios.php';
use \AW\proyecto\estatica\includes\Aplicacion as App;
	$app = App::getSingleton();
	$lista = new GestorUsuarios();
	$user = $_REQUEST['usuario'];
	$pass = $_REQUEST['pass'];
	$nombre = $_REQUEST['nombre'];
	$apellidos = $_REQUEST['apellidos'];
	$dni = $_REQUEST['dni'];
	$email = $_REQUEST['email'];
	$fechaNacimiento = $_REQUEST['fecha'];
	$sexo = $_REQUEST['sexo'];
	$telefono = $_REQUEST['tlf'];
	$direccion = $_REQUEST['direccion'];
	$cp = $_REQUEST['cp'];
	if($app->usuarioLogueado() && $app->tieneRol("Admin")){
		$tipo = $_REQUEST['tipo'];
	}
	else{
		$tipo= "User";
	}
	$avatar = "img/".$_REQUEST['foto'];
	$salida = $lista->nuevoUsuario($user, $pass, $nombre, $apellidos, $dni, $email, $fechaNacimiento, $sexo, $telefono, $direccion, $cp, $avatar, $tipo);
	if ($salida){ //Se ha hecho el registro correctamente
		header("Location: "RAIZ.RUTA_APP."index.php");
		echo "Se ha registrado";
	}
	else{
		echo "No se ha registrado";
		header("Location: "RAIZ.RUTA_APP."registrate.php");
	}
	

?>