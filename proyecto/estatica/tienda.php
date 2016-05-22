

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
				<button>Precio</button>
				<button>Relevancia</button>
				<button>Nombre</button>
			</div>
			<?php 

				include  ('includes/scriptTienda.php');
				
		
				$tienda = new tienda;
				$tienda->insertaProductosTienda();

			?>
			<?php for($i = 0; $i < $tienda->getContador(); $i++){ ?>
			<div class="producto"> 
				

					<h3><?php echo $tienda->getNombreProductos($i) ?></h3>
					<a href="producto/<?php echo $tienda->getIdProductos($i)  ?>"><img src="img/default-image.jpg"/><a>
					<h3><?php echo $tienda->getNombreONGProductos($i)  ?></h3>
					<h3 class="precio"> Precio: <?php echo $tienda->getPrecioProductos($i)  ?>€</h3>
					

				
			</div>
			<?php }	?>	
		</div>
	</body>
</html>







