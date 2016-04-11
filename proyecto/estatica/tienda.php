<!DOCTYPE html>
<html>
	<head>
		<title>Tienda - InCommOng</title>
		<link rel="stylesheet" type="text/css" href="estilos.css">
		<link rel="stylesheet" type="text/css" href="tienda.css">
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
				$productos=8;
				$precio=1;
				for($i=0; $i<$productos;$i++){
					echo '<div class="producto"> 
							<h3> Nombre del producto</h3>
							<a href="vistaproducto.php"><img src="img/default-image.jpg"/><a>
							<h3> Nombre de la ONG </h3>
							<h3 class="precio"> Precio: '.$precio.'€</h3>
							<form>
								<select>
									<option selected> 1
									<option >2
									<option >3
									<option >4
								</select>
								<input type="submit" value="Comprar">
							</form>
						  </div>';
				}
				
			?>

		</div>
	</body>
</html>
