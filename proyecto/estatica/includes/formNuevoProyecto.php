<?php
include ('config.php');
require_once 'ModelScripts/GestorProyectos.php';
$lista = new GestorProyectos();
	$nombre = $_REQUEST['nombre'];
	$cif = $_REQUEST['cif'];
	$dineroNecesario = $_REQUEST['dinero'];
	$descripcionCorta = $_REQUEST['descripcionCorta'];
	$descripcionLarga = $_REQUEST['descripcionLarga'];
	$imagen = "img/".$_REQUEST['foto'];
	$numVoluntarios = $_REQUEST['voluntarios'];
	$fechaFin = $_REQUEST['fechaFin'];
	#$rol = $_SESSION['rol'];
	$rol = "admin";
	$salida = $lista->nuevoProyecto($nombre,$cif,$dineroNecesario,$descripcionCorta,$descripcionLarga,$imagen,$numVoluntarios,$fechaFin, $rol);
	header("Location: ../vistaProyecto.php?id=".$salida);



?>