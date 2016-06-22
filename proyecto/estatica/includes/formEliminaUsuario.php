<?php
include ('config.php');
if (!isset($_SESSION)) session_start();
require_once 'ModelScripts/GestorUsuarios.php';
		$lista = new GestorUsuarios();

		$DNI = $_REQUEST['DNI'];
		header("Location: ../vistaNoticiaDetallada.php?id=".$id);
		exit();
?>