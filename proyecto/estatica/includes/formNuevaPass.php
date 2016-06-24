<?php
include ('config.php');
require_once 'ModelScripts/GestorUsuarios.php';
		$lista = new GestorUsuarios();
		$user= $_REQUEST['usuario'];
		$correo= $_REQUEST['email'];
		$dni = $_REQUEST['dni'];
		echo $lista->comprobarExisteUsuario($user, $correo, $dni);
		$lista->comprobarExisteUsuario($user, $correo, $dni)
		header("Location: ../index.php");
		exit();

?>