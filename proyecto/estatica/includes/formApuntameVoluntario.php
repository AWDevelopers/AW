<?php
include ('config.php');
if (!isset($_SESSION)) session_start();
require_once 'ModelScripts/GestorVoluntarios.php';
$lista = new GestorVoluntarios();
		$id = $_REQUEST['idProyecto'];
		$idUsuario = $_REQUEST['idUsuario'];
		header("Location: ../calendarioUsuario.php?id=".$id."&usuario=".$idUsuario);
		exit();
?>