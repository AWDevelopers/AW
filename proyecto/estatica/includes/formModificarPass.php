<?php
include (RAIZ.RUTA_INC.'config.php');
if (!isset($_SESSION)) session_start();
require_once RAIZ.RUTA_MODEL.'GestorUsuarios.php';
		if (isset($_SESSION['login']) && $_SESSION['login']) {
			$lista = new GestorUsuarios();
			$dni = $_REQUEST['id'];
			$pass1 = $_REQUEST['pass1'];
			$pass2 = $_REQUEST['pass2'];
			if($pass1 == $pass2 && strlen($pass1) >5 && strlen($pass2) >5){
				$lista->modificarContra($dni,$pass1);
				echo "Se ha modificado la contraseņa correctamente";
				header("Location: "RAIZ.RUTA_APP."vistaPerfilUsuario.php");
			}
			else{
				echo "No se puede modificar";
			}
			exit();
		}

?>