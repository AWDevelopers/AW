<?php
include (RAIZ.RUTA_INC.'config.php');
if (!isset($_SESSION)) session_start();
require_once RAIZ.RUTA_MODEL.'GestorUsuarios.php';
	
	if (isset($_SESSION['login']) && $_SESSION['login']) {
		$lista = new GestorUsuarios();
		$dni = $_REQUEST['id'];
		$lista->eliminarUsuario($dni);
		require_once RAIZ.RUTA_INC.'logout.php';
		header("Location: "RAIZ.RUTA_APP."index.php");
		exit();
	}
?>