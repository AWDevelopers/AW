<?php
include (RAIZ.RUTA_INC.'config.php');
require_once RAIZ.RUTA_MODEL.'GestorUsuarios.php';
		$lista = new GestorUsuarios();
		$user= $_REQUEST['usuario'];
		$correo= $_REQUEST['email'];
		$dni = $_REQUEST['dni'];
		//$lista->
		require_once 'logout.php';
		header("Location: "RAIZ.RUTA_APP."index.php");
		exit();

?>