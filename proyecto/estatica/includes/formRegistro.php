<?php
include ('config.php');
require_once 'ModelScripts/GestorUsuarios.php';
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
	//$tipo = "User";
	$avatar = "img/".$_REQUEST['foto'];
	$salida = $lista->nuevoUsuario($user, $pass, $nombre, $apellidos, $dni, $email, $fechaNacimiento, $sexo, $telefono, $direccion, $cp, $avatar);
	if ($salida){ //Se ha hecho el registro correctamente
		//header("Location: ../login.php");
		echo "Se ha registrado";
	}
	else{
		echo "No se ha registrado";
		//header("Location: ../index.php");
	}
	

?>