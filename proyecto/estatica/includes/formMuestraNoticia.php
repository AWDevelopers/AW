<?php
include (RAIZ.RUTA_INC.'config.php');
if (!isset($_SESSION)) session_start();
require_once RAIZ.RUTA_MODEL.'GestorNoticias.php';
		$id = $_REQUEST['id'];
		header("Location: "RAIZ.RUTA_APP."vistaNoticiaDetallada.php?id=".$id);
		exit();

?>