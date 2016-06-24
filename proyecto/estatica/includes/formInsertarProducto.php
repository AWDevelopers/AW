<?php

require_once RAIZ.RUTA_MODEL.'GestorProductos.php';

$producto = new GestorProductos();


		if($_POST['NOMBRE'] != "" && $_POST['PRECIO'] != "" && $_POST['DCORTA'] != ""
			&& $_POST['DLARGA'] != "" && $_POST['STOCK'] != ""){
			$imagen = "img/".$_POST['IMAGEN'];
			$producto->insertaProducto(null,$_SESSION['DNI'], $_POST['STOCK'] ,$_POST['PRECIO'],  $_POST['NOMBRE'],$_POST['DCORTA'],$_POST['DLARGA'] , $imagen );

			header("Location: "RAIZ.RUTA_APP."vistaAdminProductos.php");
		}
	

?>