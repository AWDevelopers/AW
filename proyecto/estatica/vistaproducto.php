

<!DOCTYPE html>
<html>
	<head>
		<title>Producto - InCommOng</title>
		<link rel="stylesheet" type="text/css" href="css/estilos.css">
		<link rel="stylesheet" type="text/css" href="css/colorsandtext.css"/>
	</head>
	<body>
		<!--CABECERA+MENU-->
		<div id='contenedor'>
			<!--Aqui va el menu y la cabecera que es comun-->
			<?php require 'common.php'; ?>
		</div>

		<!--CONTENIDO-->
		<div class="contenido">
			<?php 
<<<<<<< HEAD
				include('includes/scriptProducto.php');	

				if(isset($_POST['pid'])){
					$producto = new producto((int)$_POST['pid']);
					$producto->cargarDatosProducto();
				}else{
					echo 'Se ha producido un error inesperado.';
				}
			
=======
			include('includes/scriptProducto.php');	
				
			$producto = new producto;
			$producto->almacenarProductos();
>>>>>>> 109e44bd479a187b14b5082585673df1351d378e
			?>

			<div class="columnaIzda">
				<h1><?php echo $producto->getNombreProducto() ?></h1>
<<<<<<< HEAD
				<img src="img/default-image.jpg"/>
=======
				<img src="<?php echo $urlAbsoluta ?>img/default-image.jpg"/>
>>>>>>> 109e44bd479a187b14b5082585673df1351d378e
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
<<<<<<< HEAD
					<input type = "submit" value = "comprar"/>
=======
					<button>comprar</button>
>>>>>>> 109e44bd479a187b14b5082585673df1351d378e
					<!--<input type="submit" value="Comprar">-->
				</form>			
			</div>
		</div>
	</body>
</html>





