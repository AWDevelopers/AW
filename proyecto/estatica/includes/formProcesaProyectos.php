<?php
include ('config.php');
if (!isset($_SESSION)) session_start();
require_once 'ModelScripts/ListaProyectos.php';
$funcion = $_REQUEST['button'];

switch($funcion){
	case 'INFORMACION':
		$id = $_REQUEST['idProyecto'];
		header("Location: ../vistaProyecto.php?id=".$id);
		exit();
		break;
	case 'NUEVO':
		$lista = new ListaProyectos();
		$json = new stdClass();
		#if($lista.compruebaCIF($_REQUEST['cif']) != null){
			$json->nombre = $_REQUEST['nombre'];
			$json->cif = $_REQUEST['cif'];
			$json->dineroNecesario = $_REQUEST['dinero'];
			$json->descripcionCorta = $_REQUEST['descripcionCorta'];
			$json->descripcionLarga = $_REQUEST['descripcionLarga'];
			$json->dineroAcumulado = 0;
			$json->imagen = "img/".$_REQUEST['foto'];
			$json->numVoluntarios = $_REQUEST['voluntarios'];
			$salida = $lista->nuevoProyecto(json_encode($json));
			header("Location: ../vistaProyecto.php?id=".$salida);
		#}
		break;

}

?>