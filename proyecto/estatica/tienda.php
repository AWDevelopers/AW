<?php include('includes/config.php');
	//Producto
	$query_SacarProductos = 'SELECT * FROM producto';
	$SacarProductos = mysqli_query($connection, $query_SacarProductos);
	if(mysqli_num_rows($SacarProductos) > 0){
		$row_SacarProductos = mysqli_fetch_assoc($SacarProductos);
	}
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Tienda - InCommOng</title>
		<link rel="stylesheet" type="text/css" href="<?php echo $urlAbsoluta ?>css/estilos.css">
			<link rel="stylesheet" type="text/css" href="<?php echo $urlAbsoluta ?>css/colorsandtext.css"/>
		<!--<link rel="stylesheet" type="text/css" href="css/tienda.css">-->
	</head>
	<body>
		<div id='contenedor'>
			<!--Aqui va el menu y la cabecera que es comun-->
			<?php require 'common.php'; ?>
		</div>
		<!--CONTENIDO-->

		<div id="contenido">

			<div class="filtro">
				<p>Filtros:</p>
				<!--Estos botones deberían hacer cosas, pero sin bd no van a poder-->
				<button>Precio</button>
				<button>Relevancia</button>
				<button>Ventas</button>
			</div>

			<?php 
				if(mysqli_num_rows($SacarProductos) > 0){
					do {
						$nombreOngDelProducto = $row_SacarProductos['CIFOng'];
						$query_SacarCif = "SELECT nombre FROM ong WHERE  CIF = $nombreOngDelProducto";
						$SacarCif = mysqli_query($connection, $query_SacarCif);
						$row_SacarCif = mysqli_fetch_assoc($SacarCif);
			?>
						<div class="producto"> 
							<h3><?php echo $row_SacarProductos['nombre'] ?></h3>
							<a href="producto/<?php echo $row_SacarProductos['idProducto'] ?>"><img src="img/default-image.jpg"/><a>
							<h3><?php echo $row_SacarCif['nombre'] ?></h3>
							<h3 class="precio"> Precio: <?php echo $row_SacarProductos['precio'] ?> €</h3>
							<form>
								<select>
									<?php for ($i=1; $i <= $row_SacarProductos['stock'] ; $i++) { ?>
										<option <?php if ($i==1) echo 'selected'?>> <?php echo $i ?>
									<?php } ?>
								</select>
								<input type="submit" value="Comprar">
							</form>
						</div>
			<?php 	} while ($row_SacarProductos = mysqli_fetch_assoc($SacarProductos)); 

					mysqli_free_result($SacarCif);
				}

			?>
		</div>
	</body>
</html>
<?php mysqli_free_result($SacarProductos) ?>

