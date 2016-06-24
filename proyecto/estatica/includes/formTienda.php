<?php

	$funcion = $_REQUEST['tienda'];


	switch($funcion){
		case 'INSERTAR':
			header("Location: "RAIZ.RUTA_APP."vistaInsertarProducto.php");
			exit();
			break;

		case 'BORRAR':
			header("Location: "RAIZ.RUTA_APP."vistaBorrarProducto.php");
			exit();
			break;
	}

?>