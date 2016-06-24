<?php
include (RAIZ.RUTA_INC.'config.php');
if (!isset($_SESSION)) session_start();
require_once RAIZ.RUTA_MODEL.'GestorProyectos.php';
		$id = $_REQUEST['idProyecto'];
		header("Location: "RAIZ.RUTA_APP."vistaProyecto.php?id=".$id);
		exit();

?>