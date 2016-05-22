<<<<<<< HEAD
=======


>>>>>>> 109e44bd479a187b14b5082585673df1351d378e
<!DOCTYPE html>
<html>
<head>
	<title>Tienda InCommOng</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
		<link rel="stylesheet" type="text/css" href="css/colorsandtext.css"/>
	<!--<link rel="stylesheet" type="text/css" href="css/voluntarios.css" >-->

</head>
<body>
	<div id='contenedor'>
		<!--Aqui va el menu y la cabecera que es comun-->
		<?php require 'common.php'; ?>
		
		<!--Aqui va el contenido-->
		<div class="contenido">
		
			
			
			<div class="filtro">
				<p>Filtros:</p>
				<!--Estos botones deberían hacer cosas, pero sin bd no van a poder-->
				<button>Precio</button>
				<button>Relevancia</button>
				<button>Nombre</button>
			</div>
			
			<?php 

				include  ('includes/scriptTienda.php');
				
		
<<<<<<< HEAD
				$tienda = new tienda();
				$tienda->cargarDatosTienda();
			?>

			<?php for($i = 1; $i <= $tienda->getContador();$i++ ){ ?>

				<div class="producto"> 

					<h3><?php echo $tienda->getNombreProductos($i) ?></h3>
=======
				$tienda = new tienda;
				$tienda->insertaProductosTienda();

			?>
			<?php for($i = 0; $i < $tienda->getContador(); $i++){ ?>
			<div class="producto"> 
				

					<h3><?php echo $tienda->getNombreProductos($i) ?></h3>
					<a href="producto/<?php echo $tienda->getIdProductos($i)  ?>"><img src="img/default-image.jpg"/><a>
					<h3><?php echo $tienda->getNombreONGProductos($i)  ?></h3>
					<h3 class="precio"> Precio: <?php echo $tienda->getPrecioProductos($i)  ?>€</h3>
					
>>>>>>> 109e44bd479a187b14b5082585673df1351d378e

					<form action="vistaProducto.php" method = "post">
					
						<input type="hidden" name="pid" value= "<?php echo $i; ?> " />
					    <input type="image" id= "imagenProducto" src="img/default-image.jpg" alt = "submit">
					</form>
					
					<h3><?php echo $tienda->getNombreONGProductos($i) ?></h3>
					<h3 class="precio"> Precio: <?php echo $tienda->getPrecioProductos($i) ?>€</h3>
					<button >Comprar</button>
				
				
				</div>
			<?php } ?>
		</div>
	</div>
</body>
</html>







