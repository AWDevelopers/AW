<!DOCTYPE html>
<html>
	<head>
		<title>Tienda - InCommOng</title>
		<link rel="stylesheet" type="text/css" href="<?php echo $urlAbsoluta ?>css/estilos.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $urlAbsoluta ?>css/colorsandtext.css"/>

		<!--<link rel="stylesheet" type="text/css" href="css/tienda.css">-->
	</head>
	<body>
		<?php 
			//Consultar la url para obtener la id del producto
			function sacarLaId($id){	
				include('includes/config.php');

				$query_SacarUrl = sprintf("SELECT producto.idProducto FROM producto WHERE producto.idProducto = '%s'", $id);
				$SacarUrl = mysqli_query( $connection, $query_SacarUrl) ;
				$row_SacarUrl = mysqli_fetch_assoc($SacarUrl);

				return $row_SacarUrl['idProducto'];
				mysqli_free_result($SacarUrl);
			}

			function mostrarProducto(&$nombreONG,&$nombre, &$precio, &$stock, &$descCorta, &$descLarga){
				include('includes/config.php');
				//La id del producto
				$elProducto = sacarLaId($_GET['producto']);

				//Ver producto selecionado
				$query_SacarElProducto = sprintf("SELECT * FROM producto WHERE idProducto = '%s'", $elProducto,'int');
				$SacarElProducto = mysqli_query($connection, $query_SacarElProducto) ;
				$row_SacarElProducto = mysqli_fetch_assoc($SacarElProducto);
				$totalRows_SacarElProducto = mysqli_num_rows($SacarElProducto);

				//Cif del producto 
				$cifProducto = $row_SacarElProducto['CIFOng'];

				//Sacar el nombre del Cif
				
				$query_SacarNombreONG = sprintf("SELECT nombre FROM ong WHERE CIF = '%s'", $cifProducto,'int');
				$SacarNombreONG = mysqli_query($connection, $query_SacarNombreONG);
				$row_SacarNombreONG = mysqli_fetch_assoc($SacarNombreONG);
				$totalRows_SacarNombreONG = mysqli_num_rows($SacarNombreONG);

				$nombre = $row_SacarElProducto['nombre'];
				$descLarga = $row_SacarElProducto['descripcionLarga'];
				$descCorta= $row_SacarElProducto['descripcionCorta'];	
				$precio = $row_SacarElProducto['precio'];
				$stock = $row_SacarElProducto['stock'];
				$nombreOng = $row_SacarNombreONG['nombre'];
				
				mysqli_free_result($SacarElProducto);
				mysqli_free_result($SacarNombreONG);
			}

		?>
	</body>
</html>