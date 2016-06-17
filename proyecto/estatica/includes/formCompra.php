<?php

$funcion = $_REQUEST['compra'];

switch($funcion){
	case 'CANCELAR':
		header("Location: ../tienda.php");
		exit();
		break;

	case 'CONFIRMAR':
		$unidades = $_REQUEST['unidades'];
		$nombreProducto = $_REQUEST['nombreProducto'];
		$precioProducto = $_REQUEST['precioProducto'];
		$dniUser = $_SESSION['DNIUsuario'];
		//header("Location: ../procesarCompra.php?unidades=".$unidades."&&nombreProducto=".$nombreProducto."&&precioProducto=".$precioProducto);
		header("Location: ../procesarCompra.php");
		exit();
		break;
}

?>