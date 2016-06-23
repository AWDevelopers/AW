<?php
include ('config.php');
if (!isset($_SESSION)) session_start();
require_once 'ModelScripts/GestorUsuarios.php';
		if (isset($_SESSION['login']) && $_SESSION['login']) {
			$lista = new GestorUsuarios();
			$dni = $_REQUEST['id'];
			$nombre = $_REQUEST['nombre'];
			$apellidos = $_REQUEST['apellidos'];
			$email = $_REQUEST['email'];
			$telefono = $_REQUEST['telefono'];
			$lista->modificarPerfilUser($dni, $nombre, $apellidos, $email, $telefono);
			header("Location: ../vistaPerfilUsuario.php");
			exit();
		}

?>