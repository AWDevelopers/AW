<?php
	
	class UsuariosVista{
		
		private $ListaUsuarios;
		function __construct(){
			require_once '/../ModelScripts/GestorUsuarios.php';
			$this->ListaUsuarios = new GestorUsuarios();
		}

	function muestraUsuarios(){
		$dni= $_SESSION['DNI'];
		$lista = $this->ListaUsuarios->getListaUsuarios($dni);
		$iterator = $lista->getIterator();

		while($iterator->valid()) {
			$nombre =  $iterator->current()->getNombre();
			$apellidos = $iterator->current()->getApellidos();
			$user = $iterator->current()->getUsuario();
			$email = $iterator->current()->getEmail();
			$DNI = $iterator->current()->getDNI();
			  	 $html = <<<EOS
  				<div class="noticiaAdmin">
				  		<p>Nombre: $nombre </p>
						<p>Apellidos : $apellidos </p>
						<p>DNI : $DNI </p>
						<p>Email: $email </p>
						<p>Usuario: $user </p>
				  		<p><form name="vista" action="includes/formEliminaUsuario.php" method="POST">
				  				<input type="hidden" name="DNI" id="dni" value="$DNI" /> 
				  				<input name="button" type="submit" value="Eliminar" />
				  		</form></p>
			  		</div> 
EOS;
			echo $html;  		
		    $iterator->next();
		}		 	
	}
	
	function perfilUsuario($dni){
		$datosUsuario = $this->ListaUsuarios->getUsuario($dni);
		$nombre = $datosUsuario->getNombre();
		$apellidos =$datosUsuario->getApellidos();
		$user = $datosUsuario->getUsuario();
		$email =  $datosUsuario->getEmail();
		$DNI = $datosUsuario->getDNI();
		$telefono = $datosUsuario->getTelefono();
		$avatar = $datosUsuario->getAvatar();
		$html = <<<EOS
		<div id= "contenidoPerfilUsuario">
  			<div class="cabeceraPerfil">
				<div id="volver" class ="cabeceraPerfil">
					<button name = "volver" class= "bCabecera" ><img src="img/back.png"></button>
				</div>
				<div id="fotoUsuario" class = "cabeceraPerfil">
						<img src="$avatar">
						<p>$nombre
						$apellidos</p>
				</div>
				<div id="cerrar" class = "cabeceraPerfil">
					<button id = "bCerrar" class="bCabecera" ><img src="img/salir.png"></button>
				</div>
			</div>
			
			<div class = "datosUsuario" id="datosPersonales">
				<p>Datos personales</p>
				
						<p>Nombre : $nombre<br></p>
						<p>Apellidos :$apellidos<br></p>
						<p>email : $email</p>
						<p>DNI : $DNI</p>
						<p>Telefono : $telefono</p>
				
			</div>
			<form action="includes/formModificarPass.php" method="POST">
				<div id="cambiaContrasena" class= "datosUsuario">
					<p>Cambiar contraseña</p>
					<form>
						<p>Nueva contraseña (min 6 caracteres):
						<input type="password" name="pass1" required> (*)</input></p>
						<p>Repetir contraseña (min 6 caracteres):
						<input type="password" name="pass2" required> (*)</input></p>
						<input type="hidden" name="id" id="usuario" value="$DNI" /> 
						<input type="submit" value="Confirmar"></input>
					</form>
				</div>
			</form>

			<div id="bolsaHoras" class ="datosUsuario">
				<p>Bolsa de horas</p>
				<p>Horas totales: 8h</p>
				<form>
					<p>Día</p>
					<input type="date" name="dia"><br>
					<p>Horas</p>
					<input type="time" name="horas"><br>
					<input type="submit" value ="confirmar"></input>
				</form>
			</div>

			<form action="includes/formModificarUsuario.php" method="POST">
			<div id= "formularioPerfil" class= "datosUsuario">
				<p>Editar datos usuario</p>
				<form >
					<p>Nombre
					<input type ="text" name ="nombre" required/></p>
					<p>Apellidos
					<input type ="text" name ="apellidos" required/></p>
					<p>E-mail 
					<input type ="email" name ="email" required></p>
					<p>Teléfono 
					<input type ="text" name ="telefono" required></p>
					<input type="hidden" name="id" id="usuario" value="$DNI" /> 
					<p><input type ="submit" value="editar"></input></p>
				</form>
			</div>
			<form action="includes/formEliminarPropiaCuenta.php" method="POST">
				<input type="hidden" name="id" id="usuario" value="$DNI" /> 
			<p><input type ="submit" value="Eliminar cuenta"></input></p>
			</form>
		</div> 
EOS;
			echo $html; 
	}
	

}
?>