<?php
include (RAIZ.RUTA_INC.'config.php');
if (!isset($_SESSION)) session_start();
require_once RAIZ.RUTA_MODEL.'GestorNoticias.php';
    $lista = new GestorNoticias();
    $titulo = $_REQUEST['titulo'];
    $tipo = $_REQUEST['tipo'];
	$descripcionCorta = $_REQUEST['descripcionCorta'];
	$descripcionLarga = $_REQUEST['descripcionLarga'];
	$imagen = "img/".$_REQUEST['imagen'];
	$salida = $lista->nuevaNoticia($titulo, $tipo , $descripcionCorta, $descripcionLarga,$imagen);
	header("Location: "RAIZ.RUTA_APP."vistaNoticiaDetallada.php?id=".$salida);
?>