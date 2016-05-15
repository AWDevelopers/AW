<?php include('includes/config.php');
	//Consultar la url para obtener la id del producto
	function sacarLaId($id){
		global  $connection;
		$query_SacarUrl = sprintf("SELECT producto.idProducto FROM producto WHERE producto.idProducto = '%s'", $id);
		$SacarUrl = mysqli_query( $connection, $query_SacarUrl) ;
		$row_SacarUrl = mysqli_fetch_assoc($SacarUrl);

		return $row_SacarUrl['idProducto'];
		mysqli_free_result($SacarUrl);
	}

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
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Producto - InCommOng</title>
		<link rel="stylesheet" type="text/css" href="<?php echo $urlAbsoluta ?>css/estilos.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $urlAbsoluta ?>css/colorsandtext.css"/>
	</head>
	<body>
		<!--CABECERA+MENU-->
		<<div id='contenedor'>
			<!--Aqui va el menu y la cabecera que es comun-->
			<?php require 'common.php'; ?>
		</div>
		<!--CONTENIDO-->
		<div id="contenido">
			<div class="columnaIzda">
				<h1><?php echo $row_SacarElProducto['nombre'] ?></h1>
				<img src="img/default-image.jpg"/>
				<h1><?php echo $row_SacarNombreONG['nombre'] ?></h1>
				<h3><?php echo $row_SacarElProducto['descripcionCorta'] ?></h3>
				<p><?php echo $row_SacarElProducto['descripcionLarga'] ?></p>	
			</div>
			
			<div class="columnaDcha">
				<h3>Precio: <?php echo $row_SacarElProducto['precio'] ?> €</h3>
				<p>Num.Unidades <?php echo $row_SacarElProducto['stock'] ?></p>
				<form>
					<select>
						<?php for ($i=1; $i <= $row_SacarElProducto['stock']; $i++) { ?>
							<option <?php if ($i==1) echo 'selected'?>> <?php echo $i ?>
						<?php } ?>
					</select>
					<input type="submit" value="Comprar">
				</form>			
			</div>
		</div>
	</body>
</html>
<?php mysqli_free_result($SacarElProducto) ?>
<?php mysqli_free_result($SacarNombreONG) ?>
