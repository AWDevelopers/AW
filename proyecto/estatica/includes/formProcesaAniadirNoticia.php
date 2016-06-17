<?php
include ('config.php');
if (!isset($_SESSION)) session_start();
require_once 'ModelScripts/GestorNoticias.php';
        $lista = new GestorNoticias();
        $titulo = $_REQUEST['titulo'];
         $tipo = $_REQUEST['tipo'];
	$descripcionCorta = $_REQUEST['desCorta'];
	$descripcionLarga = $_REQUEST['desLarga'];
	$imagen = "img/".$_REQUEST['imagen'];
	$fecha = $_REQUEST['fecha'];
	$salida = $lista->nuevaNoticia($titulo, $tipo , $descripcionCorta, $descripcionLarga, $imagen, $fecha);
	header("Location: ../vistaNoticiaDetallada.php?id=".$salida);
?>