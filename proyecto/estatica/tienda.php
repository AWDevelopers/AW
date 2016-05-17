
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
				<button>Nombre</button>
			</div>
			<?php 

				include  ('scriptTienda.php');
				$nombreONG ='';
				$id='';
				$nombre='';
				$precio='';
				$stock=''	;

				 mostrarTienda($nombreONG, $id, $nombre, $precio, $stock,$n ); 

			?>
			<?php for($i = 0; $i < $n; $i++){ ?>
			<div class="producto"> 
				

					<h3><?php echo $nombre[$i] ?></h3>
					<a href="producto/<?php echo $id[$i] ?>"><img src="img/default-image.jpg"/><a>
					<h3><?php echo $nombreONG[$i] ?></h3>
					<h3 class="precio"> Precio: <?php echo $precio[$i] ?>€</h3>
					

				
			</div>
			<?php }	?>	
		</div>
	</body>
</html>



