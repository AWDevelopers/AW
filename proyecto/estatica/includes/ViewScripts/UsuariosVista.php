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

	function muestraUsuario($id){

		$proyecto = $this->ListaProyectos->getProyecto($id);
		$nombre = $proyecto->getNombre();
		$fecha = $proyecto->getFechaCreacion();
		$numVoluntarios =  $proyecto->getNumVoluntarios();
		$imagen = $proyecto->getImagen();
		$descripcion = $proyecto->getDescripcionLarga();
		#$idUsuario = $_SESSION['usuario'];
		$idUsuario = "000000000";
		$html = <<<EOS
		<h1> $nombre </h1>
		<div class="imgDonaciones">
			<img src="$imagen" />
		</div>
		<p> $descripcion </p>
		<div class='proyectoFechas'>Fecha: $fecha </div>		
		<div class='proyectoVoluntario'>Voluntarios necesarios: $numVoluntarios </div>	
		<form name="vista" action="includes/formApuntameVoluntario.php" method="POST">
				<input type="hidden" name="idProyecto" id="proyecto" value="$id" /> 
				<input type="hidden" name="idUsuario" id="usuario" value="$idUsuario" /> 
				<input name="button" type="submit" value="APUNTAME" />
		</form>
EOS;
		echo $html;
	}

}
?>