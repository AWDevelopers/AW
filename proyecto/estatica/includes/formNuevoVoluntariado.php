<?php
include ('config.php');
require_once 'ModelScripts/Voluntarios.php';
require_once 'ModelScripts/GestorVoluntarios.php';
		$id = $_REQUEST['id'];
		$dni = $_REQUEST['dni'];
		$dia = $_REQUEST['dia'];
		$horaI = $_REQUEST['horaIni'];
		$horaF = $_REQUEST['horaFin'];
		echo $dni;
		$GestorVoluntarios = new GestorVoluntarios();
		$GestorVoluntarios->nuevoVoluntariado($id,$dni,$dia, $horaI, $horaF);
		//header("Location: ../donaciones.php?id=".$id."dineroAcumulado=".$dineroAcumulado);
?>