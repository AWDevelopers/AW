<?php
include (RAIZ.RUTA_INC.'config.php');
require_once RAIZ.RUTA_MODEL.'GestorProyectos.php';
$lista = new GestorProyectos();
	$id = $_REQUEST['idProyecto'];
	$nombre = $_REQUEST['nombre'];
	$dineroNecesario = $_REQUEST['dineroNecesario'];
	$descripcionCorta = $_REQUEST['descripcionCorta'];
	$descripcionLarga = $_REQUEST['descripcionLarga'];
	$imagen = "img/".$_REQUEST['imagen'];
	$numVoluntarios = $_REQUEST['numVoluntarios'];
	$fechaFin = $_REQUEST['fechaFin'];
	#$rol = $_SESSION['rol'];
	$lista->modificaProyecto($id, $nombre,$dineroNecesario,$descripcionCorta,$descripcionLarga,$imagen,$numVoluntarios,$fechaFin);
	header("Location: "RAIZ.RUTA_APP."vistaAdminProyectos.php);

?>