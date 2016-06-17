<?php
include ('config.php');
if (!isset($_SESSION)) session_start();
require_once '../ModelScripts/ListaNoticias.php';
$funcion = $_REQUEST['button'];

switch($funcion){
	case 'Seguir leyendo':
            $id = $_REQUEST['id'];
            header("Location: ../vistaNoticiaDetallada.php?id=".$id);
            exit();
        break;
	case 'NUEVO':
		$lista = new ListaNoticias();
		$json = new stdClass();
                $json->titulo = $_REQUEST['titulo'];
                $json->tipo = $_REQUEST['tipo'];
                $json->descripcionCorta = $_REQUEST['desCorta'];
                $json->descripcionLarga = $_REQUEST['desLarga'];
                $json->fecha = $_REQUEST['fecha'];
                $json->imagen = "img/".$_REQUEST['foto'];
			
                $salida = $lista->nuevaNoticia(json_encode($json));
                //header("Location: ../vistaNoticia.php?id=".$salida);
		
        break;

}

?>
