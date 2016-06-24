<?php

require_once RAIZ.RUTA_MODEL.'GestorProductos.php';
$funcion = $_REQUEST['producto'];

$producto = new GestorProductos();

switch($funcion){
	case 'MUESTRA':
		$idProducto = $_REQUEST['idProducto'];
		header("Location: "RAIZ.RUTA_APP."vistaProducto.php?idProducto=".$idProducto);
		exit();
		break;

	case 'BORRAR':
		$idProducto = $_POST['elijoEste'];
		$producto->borrarProducto($idProducto);
		header("Location: "RAIZ.RUTA_APP."vistaAdminProductos.php");
		exit();
		break;

	case 'ELEGIRMODIFICAR':
		header("Location: "RAIZ.RUTA_APP."modificarProducto.php?idProducto=".$_POST['elijoEste']);
		exit();
		break;
	

	case 'INSERTAR':
		$nombre = $_POST['nombre'];
		$nombreONG = $_POST['nombreONG'];
		$precio = $_POST['precio'];
		$descCorta = $_POST['descCorta'];
		$descLarga = $_POST['descLarga'];
		$stock = $_POST['stock'];
		$imagen = "img/pin.jpg";
		$idProducto= 5;
		$producto ->insertaProducto(null, $nombreONG, $stock, $precio, $nombre, $descCorta, $descLarga, $imagen );
	exit();
	break;
}

?>