<!DOCTYPE html>
<html>
	<head>
		<title>Da de baja una ONG - InCommOng</title>
		<link rel="stylesheet" type="text/css" href="css/estilos.css"/>
		<link rel="stylesheet" type="text/css" href="css/colorsandtext.css"/>
		
	</head>
	<body>
		<div id='contenedor'>
			<!--Aqui va el menu y la cabecera que es comun-->
			<? php require 'common.php'; ?>
		</div>
		<!--CONTENIDO-->

			<div id="contenido">
				<div class="formulario">
					<form action="includes/eliminarOng.php" method="POST">
						<p>CIF de la Ong
						<input type="text" name="cif" required></input></p>
						<p>Nombre de la Ong
						<p><input type="submit" name="submit" value="Dar de baja Ong"></p>
					</form>
					
				</div>
				
		</div>
	</body>
</html>
