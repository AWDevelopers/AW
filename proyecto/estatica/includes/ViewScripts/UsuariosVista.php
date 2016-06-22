<?php
	
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
  				<div>
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
		$lista = $this->ListaUsuarios->getListaUsuarios();
		$iterator = $lista->getIterator();
		$nombre = $iterator->current()->getNombre();
		$apellidos = $iterator->current()->getApellidos();
		$user = $iterator->current()->getUsuario();
		$email =  $iterator->current()->getEmail();
		$DNI = $iterator->current()->getDNI();
		$telefono = $iterator->current()->getTelefono();
		$avatar = $iterator->current()->getAvatar();
		$html = <<<EOS
		<div id= "contenidoPerfilUsuario">
  				<div class="cabeceraPerfil">
				<div id="volver" class ="cabeceraPerfil">
					<button name = "volver" class= "bCabecera" ><img src="img/back.png"></button>

				</div>
				<div id="fotoUsuario" class = "cabeceraPerfil">
						<img src="$avatar">
						<strong>
						<p>$nombre</p>
						<p>$apellidos</p>
						</strong>
				</div>
				<div id="cerrar" class = "cabeceraPerfil">
					<button id = "bCerrar" class="bCabecera" ><img src="img/salir.png"></button>
				</div>
			</div>
		</div> 
EOS;
			echo $html; 
	}
	

}
?>