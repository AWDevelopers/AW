<?php

require_once '/../ModelScripts/ListaProyectos.php';
$funcion = $_REQUEST['button'];

switch($funcion){
	case 'INFORMACION':
		$id = $_REQUEST['idProyecto'];
		header("Location: ../vistaProyecto.php?id=".$id);
		exit();
		break;
}

?>