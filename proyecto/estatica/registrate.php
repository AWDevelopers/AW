<!DOCTYPE html>
<html>
	<head>
		<title>Registrate - InCommOng</title>
		<link rel="stylesheet" type="text/css" href="css/estilos.css"/>
		<link rel="stylesheet" type="text/css" href="css/colorsandtext.css"/>
		
	</head>
	<body>
		<div id='contenedor'>
			<!--Aqui va el menu y la cabecera que es comun-->
			<?php require 'common.php'; ?>
		</div>
		<!--CONTENIDO-->

			<div class="contenido">
				<div class="formulario">
					<form action="includes/registro.php" method="POST">
						<p>Usuario</p>
						<input type="text" name="usuario" required></input>
						<p>Contraseña</p>
						<input type="password" name="contraseña" required></input>
						<p>Nombre</p>
						<input type="text" name="nombre"></input>
						<p>Apellidos</p>
						<input type="text" name="apellidos"></input>
						<p>DNI</p>
						<input type="text" name="dni" required></input>
						<p>Correo electrónico</p>
						<input type="email" name="email" required></input>
						<p>Fecha de Nacimiento</p>
						<input type="date" name="fecha"></input>
						<p>Sexo</p>
						<select name="sexo">
							<option value="no_determinado">Sin Determinar</option>
							<option value="masculino">Masculino</option>
							<option value="femenino">Femenino</option>
						</select>
						<p>Telefono</p>
						<input type="number" name="tlf"></input>
						<p>Direccion</p>
						<input type="text" name="direccion"></input>
						<p>CP</p>
						<input type="number" name="cp"></input>
						</br>
						<input type="submit" name="submit" value="Registrate">
					</form>
					
				</div>
				
		</div>
	</body>
</html>
