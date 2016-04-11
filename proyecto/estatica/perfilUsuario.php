<!DOCTYPE html>
<html>
<head>
	<title>Perfil de usuario</title>
	  <link rel="stylesheet" type="text/css" href="perfilUsuario.css"/>
	  <link rel="stylesheet" type="text/css" href="estilos.css"/>
</head>
<body>
	<div id='contenedor'>
		<?php require 'common.php'; ?>
		<div id="contenido">
			
			<div id= "contenidoPerfilUsuario">
				<div class="cabeceraPerfil">
					<div id="volver" class ="cabeceraPerfil">
						<button name = "volver" class= "bCabecera" ><img src="img/volver.png"></button>

					</div>
					<div id="fotoUsuario" class = "cabeceraPerfil">
						<center>
							<img src="img/contact_mini.png">
							<strong>
							<?php
								if($_GET){
									echo '<center>'.$_GET["nombre"].' '.$_GET["apellidos"].'</center>';
								}else{
									echo '<center>Nombre Apellido1 Apellido2</center>';
								}
							?>
							</strong>
						</center>
					</div>
					<div id="cerrar" class = "cabeceraPerfil">
						<button id = "bCerrar" class="bCabecera" ><img src="img/cerrar.png"></button>
					</div>
				</div>

				<div class = "datosUsuario" id="datosPersonales">
					<center><strong><p>Datos personales</p></strong></center>
					<?php
						if($_GET){	
							echo 'Nombre : '.$_GET["nombre"].'<br>';
							echo 'Apellidos :'. $_GET["apellidos"].'<br>';
							echo 'email : '.$_GET["email"].'<br>';
							echo 'DNI : '.$_GET["DNI"].'<br>';
							echo 'Teléfono : '.$_GET["telefono"].'<br>';
						}else{		
							echo 'Nombre : Nombre<br>';
							echo 'Apellidos :Apellido1 apellido2<br>';
							echo 'email : emal@email.com<br>';
							echo 'DNI : 01010101-A<br>';
							echo 'Teléfono : 999 99 99 99<br>';
						}
					?>	
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
	</div>
</body>
</html>