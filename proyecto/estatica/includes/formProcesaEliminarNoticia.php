<?php
	include ('config.php');
	require_once 'ModelScripts/GestorNoticias.php';
	$lista = new GestorNoticias();
	$idNoticia=$_REQUEST['id'];
	echo $idNoticia;
	$salida = $lista->eliminaNoticia($idNoticia);
	header("Location: ../formAdminNoticias.php");
?>