<?php
	use \AW\proyecto\estatica\includes\Aplicacion as App;
	include (RAIZ.RUTA_INC.'config.php');
	require_once RAIZ.RUTA_MODEL.'GestorProductos.php';
	require_once RAIZ.RUTA_MODEL.'GestorCompras.php';

	$prod = new GestorProductos();
	$prod->modificaStockProducto($_POST['idProducto'], $_POST['quantity']);

	$compra = new GestorCompras();
	$compra->nuevaCompra($_POST['idProducto'], $_POST['CIFOng'], $_POST['quantity']);
?>