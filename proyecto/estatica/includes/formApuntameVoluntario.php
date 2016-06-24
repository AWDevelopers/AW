<?php
include (RAIZ.RUTA_INC.'config.php');
if (!isset($_SESSION)) session_start();
require_once RAIZ.RUTA_MODEL.'GestorVoluntarios.php';
$lista = new GestorVoluntarios();
		$id = $_REQUEST['idProyecto'];
		if (isset($_SESSION['login']) && $_SESSION['login'])
			header("Location:"RAIZ.RUTA_APP."calendarioUsuario.php?id=".$id);
		else
			header("Location:"RAIZ.RUTA_APP."registrate.php");
		exit();
?>