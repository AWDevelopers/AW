<?php
include ('config.php');
require_once RAIZ.RUTA_MODEL.'GestorUsuarios.php';
    $lista = new GestorUsuarios();
    $user = $_REQUEST['usuario'];
    $pass = $_REQUEST['pass'];
	$login= $lista->comprobarLogin($user, $pass);
	//Login incorrecto
	if (!$login){
		header("Location: "RAIZ.RUTA_APP."login.php");
	}
	else{
		//Login correcto
		header("Location: "RAIZ.RUTA_APP."index.php");
	}
?>