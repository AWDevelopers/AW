<?php

require_once 'ModelScripts/GestorProductos.php';
$funcion = $_REQUEST['producto'];

$producto = new GestorProductos();

switch($funcion){
	case 'MUESTRA':
		$idProducto = $_REQUEST['idProducto'];
		header("Location: ../vistaProducto.php?idProducto=".$idProducto);
		exit();
		break;

	case 'COMPRAR':
		$unidades = $_REQUEST['unidades'];
		$nombreProducto = $_REQUEST['nombreProducto'];
		$precioProducto = $_REQUEST['precioProducto'];
		header("Location: ../vistaCompra.php?unidades=".$unidades."&&nombreProducto=".$nombreProducto."&&precioProducto=".$precioProducto);
		exit();
		break;

	case 'BORRAR':
		$idProducto = $_POST['idProducto'];
		
		
		
		$producto->borrarProducto($idProducto);
		header("Location: ../tienda.php?idProducto=".$idProducto."");
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