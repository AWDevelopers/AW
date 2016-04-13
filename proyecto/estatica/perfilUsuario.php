<!DOCTYPE html>
<html>
<head>
	<title>Perfil de usuario</title>
	  <link rel="stylesheet" type="text/css" href="perfilUsuario.css"/>
	  <link rel="stylesheet" type="text/css" href="estilos.css"/>
</head>
<body>
	<div id="contenido">
		<?php require("common.php")?>
		<div id= "contenidoPerfilUsuario">
			<div class="cabeceraPerfil">
				<div id="volver" class ="cabeceraPerfil">
					<button name = "volver" class= "bCabecera" ><img src="img/back.png"></button>

				</div>
				<div id="fotoUsuario" class = "cabeceraPerfil">
					<center>
						<img src="img/perfil.png">
						<strong>
						<p>Nombre Apellidos</p>
						</strong>
					</center>
				</div>
				<div id="cerrar" class = "cabeceraPerfil">
					<button id = "bCerrar" class="bCabecera" ><img src="img/salir.png"></button>
				</div>
			</div>

			<div class = "datosUsuario" id="datosPersonales">
				<center><strong><p>Datos personales</p></strong></center>
				
						<p>Nombre : Nombre<br></p>
						<p>Apellidos :Apellido1 apellido2<br></p>
						<p>email : emal@email.com</p>
						<p>DNI : 01010101-A</p>
						<p>Teléfono : 999 99 99 99</p>
				
			</div>
			<div id="cambiaContrasena" class= "datosUsuario">
				<center><strong>Cambiar contraseña</strong></center><br>
				<form>
					Nueva contraseña:
					<input type="password"></input><br>
					Repetir contraseña:
					<input type="password"></input><br>
					<center><input type="submit" value="Confirmar"></input></center>
				</form>
			</div>

			<div id="bolsaHoras" class ="datosUsuario">
				<strong><center><p>Bolsa de horas</p></center></strong>
				<p>Horas semanales: 8h</p>
				<form>
					<p>Día</p>
					<input type="date" name="dia"><br>
					<p>Horas</p>
					<input type="time" name="horas"><br>
					<center><input type="submit" value ="confirmar"></input></center>
				</form>
			</div>

			<div id= "formularioPerfil" class= "datosUsuario">
				<center><strong><p>Editar datos usuario</p></strong></center>
				<form >
					<br>
					Nombre
					<input type ="text" name ="nombre"/><br>
					<br>Apellidos

					<input type ="text" name ="apellidos" /><br>
					<br>E-mail 
					<input type ="email" name ="email" ><br>
					<br>DNI 
					<input type ="text" name ="DNI" ><br>
					<br>Teléfono 
					<input type ="text" name ="telefono" ><br>
					<center>
						
						<input type ="submit" value="editar"></input>
					</center>
				</form>
			</div>
		</div>

	</div>
</body>
</html>
