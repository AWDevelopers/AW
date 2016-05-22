

<!DOCTYPE html>
<html>
	<head>
		<title>Producto - InCommOng</title>
		<link rel="stylesheet" type="text/css" href="<?php echo $urlAbsoluta ?>css/estilos.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $urlAbsoluta ?>css/colorsandtext.css"/>
	</head>
	<body>
		<!--CABECERA+MENU-->
		<div id='contenedor'>
			<!--Aqui va el menu y la cabecera que es comun-->
			<?php require 'common.php'; ?>
		</div>

		<!--CONTENIDO-->
		<div id="contenido">
			<?php 
			include('includes/scriptProducto.php');	
				
			$producto = new producto;
			$producto->almacenarProductos();
			?>

			<div class="columnaIzda">
				<h1><?php echo $producto->getNombreProducto() ?></h1>
				<img src="<?php echo $urlAbsoluta ?>img/default-image.jpg"/>
				<h1><?php echo $producto->getNombreONGProducto() ?></h1>
				<h3><?php echo $producto->getDescCortaProducto() ?></h3>
				<p><?php echo $producto->getDescLargaProducto() ?></p>	
			</div>
			
			<div class="columnaDcha">
				<h3>Precio: <?php echo $producto->getPrecioProducto() ?> €</h3>
				<p>Num.Unidades <?php echo $producto->getStockProducto() ?></p>
				<form>
					<select>
						<?php for ($i=1; $i <= $producto->getStockProducto() ; $i++) { ?>
							<option <?php if ($i==1) echo 'selected'?>> <?php echo $i ?>
						<?php } ?>
					</select>
					<button>comprar</button>
					<!--<input type="submit" value="Comprar">-->
				</form>			
			</div>
		</div>
	</body>
</html>





