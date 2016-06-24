<?php
include (RAIZ.RUTA_INC.'config.php');
if (!isset($_SESSION)) session_start();
require_once RAIZ.RUTA_MODEL.'GestorProyectos.php';
		$id = $_REQUEST['idProyecto'];
		$dineroAcumulado = $_REQUEST['dineroAcumulado'];
		header("Location: "RAIZ.RUTA_APP."donaciones.php?id=".$id."&dineroAcumulado=".$dineroAcumulado);
		exit();

?>