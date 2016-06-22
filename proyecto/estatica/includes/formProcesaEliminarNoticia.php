<?php
	include ('config.php');
	require_once 'ModelScripts/GestorNoticias.php';
	$lista = new GestorNoticias();
	$idNoticia=$_GET['id'];
	$salida = $lista->eliminaNoticia($idNoticia);
	header("Location: ../formAdminNoticias.php");
?>