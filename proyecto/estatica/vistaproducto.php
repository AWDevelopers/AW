
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

			include('scriptProducto.php');
			$nombreONG ='';
			$id='';
			$nombre='';
			$precio='';
			$stock=''	;

			mostrarProducto($nombreONG, $nombre, $precio, $stock, $descCorta, $descLarga ); 

			?>

			<div class="columnaIzda">
				<h1><?php echo $nombre ?></h1>
				<img src="<?php echo $urlAbsoluta ?>img/default-image.jpg"/>
				<h1><?php echo $nombreONG ?></h1>
				<h3><?php echo $descCorta ?></h3>
				<p><?php echo $descLarga ?></p>	
			</div>
			
			<div class="columnaDcha">
				<h3>Precio: <?php echo $precio ?> €</h3>
				<p>Num.Unidades <?php echo $stock?></p>
				<form>
					<select>
						<?php for ($i=1; $i <= $stock; $i++) { ?>
							<option <?php if ($i==1) echo 'selected'?>> <?php echo $i ?>
						<?php } ?>
					</select>
					<input type="submit" value="Comprar">
				</form>			
			</div>
		</div>
	</body>
</html>


