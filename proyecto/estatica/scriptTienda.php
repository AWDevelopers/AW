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
			function mostrarTienda(&$nombreONG, &$id, &$nombre, &$precio, &$stock, &$n){
				include('includes/config.php');
				$contador = 0;
				$query_SacarProductos = 'SELECT * FROM producto ORDER BY nombre';
				$SacarProductos = mysqli_query($connection, $query_SacarProductos);
				$n = mysqli_num_rows($SacarProductos);

				if($n > 0){
					$row_SacarProductos = mysqli_fetch_assoc($SacarProductos);

					do {
						
						$nombre[$contador] = $row_SacarProductos['nombre'];
						$id[$contador] = $row_SacarProductos['idProducto'];
						$precio[$contador] = $row_SacarProductos['precio'];
						$stock[$contador] = $row_SacarProductos['stock'];
						$nombreOngDelProducto = $row_SacarProductos['CIFOng'];

						$query_SacarCif = "SELECT nombre FROM ong WHERE  CIF = $nombreOngDelProducto";
						$SacarCif = mysqli_query($connection, $query_SacarCif);
						$row_SacarCif = mysqli_fetch_assoc($SacarCif);
						$nombreONG[$contador] = $row_SacarCif['nombre'];
						
						$contador++;
						
					} while ($row_SacarProductos = mysqli_fetch_assoc($SacarProductos)); 
					$n = $contador; 
					mysqli_free_result($SacarCif);
				}
				mysqli_free_result($SacarProductos);
			}
			

		?>
	</body>
</html>	