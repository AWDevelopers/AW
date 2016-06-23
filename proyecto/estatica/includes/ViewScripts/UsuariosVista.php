﻿<?php
	
	class UsuariosVista{
		
		private $ListaUsuarios;
		function __construct(){
			require_once '/../ModelScripts/GestorUsuarios.php';
			$this->ListaUsuarios = new GestorUsuarios();
		}

	function muestraUsuarios(){
		$lista = $this->ListaUsuarios->getListaUsuarios();
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
				  		<form name="vista" action="includes/formEliminaUsuario.php" method="POST">
				  				<input type="hidden" name="DNI" id="dni" value="$DNI" /> 
				  				<input name="button" type="submit" value="Eliminar" />
				  		</form>
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
		
  			<div class="cabeceraPerfil">
				<div id="volver" >
					<button name = "volver" class= "bCabecera" ><img src="img/back.png"></button>
				</div>
				
				<div id="cerrar">
					<button id = "bCerrar" class="bCabecera" ><img src="img/salir.png"></button>
				</div>
				
				<div id="fotoUsuario" >
						<img src="$avatar">
						
				</div>
				
			</div>
		<div id= "contenidoPerfilUsuario">
			<div id ="datosUsuario" >
				<p><h2>Datos personales:</h2></p>
				
						<p>Nombre : $nombre</p>
						<p>Apellidos : $apellidos</p>
						<p>email : $email</p>
						<p>DNI : $DNI</p>
						<p>Telefono : $telefono</p>
				
			</div>
		</div>
		<div id= "contenidoPerfilUsuario">
			<form action="includes/formModificarPass.php" method="POST">
				<div id ="datosUsuario" >
					<p><h2>Cambiar contraseña: </h2></p>
					<form>
						<p>Nueva contraseña (min 6 caracteres): </p>
						<p><input type="password" name="pass1" required> (*)</input></p>
						<p>Repetir contraseña (min 6 caracteres): </p>
						<p><input type="password" name="pass2" required> (*)</input></p>
						<p><input type="hidden" name="id" id="usuario" value="$DNI" /> </p>
						<p><input type="submit" value="Confirmar"></input></p>
					</form>
				</div>
			</form>
		</div>
		<div id= "contenidoPerfilUsuario">
			<div id ="datosUsuario">
				<p><h2>Bolsa de horas: </h2></p>
				<p>Horas semanales: 8h</p>
				<form>
					<p>Día: </p>
					<p><input type="date" name="dia"></p>
					<p>Horas: </p>
					<p><input type="time" name="horas"></p>
					<p><input type="submit" value ="confirmar"></input></p>
				</form>
			</div>
		</div>
		<div id= "contenidoPerfilUsuario">
			<form action="includes/formModificarUsuario.php" method="POST">
			<div id= "datosUsuario">
				<p><h2>Editar datos del usuario: </h2></p>
				<form >
					<p>Nombre:</p>
					<p><input type ="text" name ="nombre" required/></p>
					<p>Apellidos:</p>
					<p><input type ="text" name ="apellidos" required/></p>
					<p>E-mail: </p>
					<p><input type ="email" name ="email" required></p>
					<p>Teléfono : </p>
					<p><input type ="text" name ="telefono" required></p>
					<p><input type="hidden" name="id" id="usuario" value="$DNI" /> </p>
					<p><input type ="submit" value="editar"></input></p>
				</form>
			</div>
			</form>
		</div>
		</div> 
EOS;
			echo $html; 
	}
	

}
?>