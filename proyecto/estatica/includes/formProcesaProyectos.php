<?php

require_once '/../ModelScripts/ListaProyectos.php';
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
		$json->nombre = $_REQUEST['nombre'];
		$json->cif = $_REQUEST['cif'];
		$json->fecha = '08/07/1992';# = new DateTime("now", new DateTimeZone('Europe/Madrid'));
		$json->dineroNecesario = $_REQUEST['dinero'];
		$json->descripcionCorta = $_REQUEST['descripcionCorta'];
		$json->descripcionLarga = $_REQUEST['descripcionLarga'];
		$json->dineroAcumulado = 0;
		$json->imagen = 'img/imagen.png';
		$json->numVoluntarios = 50;
		$json->id = 000000010;
		$salida = $lista->nuevoProyecto(json_encode($json));
		break;

}

?>