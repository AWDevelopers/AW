<?php
	require_once '/../ModelScripts/Compras.php';
	require_once '/../includes/config.php';
	
	class DaoCompras{

		function insertarCompra($compra){
			$con = createConnection();
			$sql = "INSERT INTO compras(idProducto, CIFOng, DNIUsuario, numProductos) VALUES ";
			$sql.= "('".$compra->getidProducto()."', '".$compra->getCifOng()."', '".$compra->getDNIUsuario()."', '".$compra->getnumProductos()."')";

			$con->query($sql) or die ($con->error);
			closeConnection($con);
		}


	}

?>