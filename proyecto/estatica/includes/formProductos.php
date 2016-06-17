<?php


$funcion = $_REQUEST['producto'];

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
}

?>