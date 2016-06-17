<?php
include ('config.php');
if (!isset($_SESSION)) session_start();
require_once 'ModelScripts/GestorProyectos.php';
$lista = new GestorProyectos();
	$nombre = $_REQUEST['nombre'];
	$cif = $_REQUEST['cif'];
	$dineroNecesario = $_REQUEST['dinero'];
	$descripcionCorta = $_REQUEST['descripcionCorta'];
	$descripcionLarga = $_REQUEST['descripcionLarga'];
	$imagen = "img/".$_REQUEST['foto'];
	$numVoluntarios = $_REQUEST['voluntarios'];
	$salida = $lista->nuevoProyecto($nombre,$cif,$dineroNecesario,$descripcionCorta,$descripcionLarga,$imagen,$numVoluntarios);
	header("Location: ../vistaProyecto.php?id=".$salida);



?>