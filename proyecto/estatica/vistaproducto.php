<!DOCTYPE html>
<html>
	<head>
		<title>Producto - InCommOng</title>
		<link rel="stylesheet" type="text/css" href="css/estilos.css">
		<link rel="stylesheet" type="text/css" href="css/vistaproducto.css">
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
				<h1>NOMBRE DEL PRODUCTO</h1>
				<img src="img/default-image.jpg"/>
				<h1>NOMBRE ONG</h1>
				<h3>Descripción</h3>
				<p>Descripcion del producto</p>	
			</div>
			
			<div class="columnaDcha">
				<h3>Precio: 1€</h3>
				<p>Num.Unidades</p>
				<form>
					<select>
						<option selected> 1
						<option >2
						<option >3
						<option >4
					</select>
				</form>				
				<button> Comprar</button>			
			</div>
		</div>
	</body>
</html>