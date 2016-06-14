<!DOCTYPE html>
<html>
	<head>
		<title>Aportar Donación - InCommOng</title>
		<link rel="stylesheet" type="text/css" href="css/estilos.css"/>
		<link rel="stylesheet" type="text/css" href="css/colorsandtext.css"/>
		
	</head>
	<body>
		<div id='contenedor'>
			<!--Aqui va el menu y la cabecera que es comun-->
			<?php require 'common.php'; ?>
		<!--</div>-->
		<!--CONTENIDO-->

			<div id="contenido">
			<?php
			if (isset($_SESSION['login']) && $_SESSION['login']) {
			?>
				<div class="formulario">
					<form action="includes/aniadirDonacion.php" method="POST">
						<p>Dni:
						<input type="text" name="dni" required></input></p>
						<p>Proyecto(id):
						<input type="text" name="pid" required value = "<?=$_POST['idProyect']?>"></input></p>
						<p>Cantidad a donar:
							<?php $dinero = $_POST['cantidad']?>
							<input type="text" name="cantidad" required value="<?= $dinero ?>" />
						</p>
						<p><input type="submit" name="submit" value="Hacer Donación"></p>
					</form>
				</div>
			<?php
			}else{
			?>
				<h2>Usuario no logeado! </h2>
				<p>Para realizar una donación debes estar <a href="registrate.php">registrado</a> o <a href="login.php">logueado</a></p>
			<?php	
			}
			?>
			</div>	
		</div>
	</body>
</html>
