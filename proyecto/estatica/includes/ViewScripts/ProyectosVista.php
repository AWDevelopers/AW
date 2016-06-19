<?php
	
	class vistaProyectos{
		
		private $ListaProyectos;
		function __construct(){
			require_once '/../ModelScripts/GestorProyectos.php';
			$this->ListaProyectos = new GestorProyectos();
		}

	function muestraProyectosVoluntarios(){
		
		$lista = $this->ListaProyectos->getListaProyectosVoluntarios();
		$iterator = $lista->getIterator();

		while($iterator->valid()) {
			$nombre =  $iterator->current()->getNombre();
			$imagen = $iterator->current()->getImagen();
			$id = $iterator->current()->getIdProyecto();
			  	 $html = <<<EOS
  				<div class="contenidoVoluntarios">
				  		<h1> $nombre </h1>
						<div class="imgDonaciones">
				  			<img src="$imagen" />
				  		</div>
				  		<form name="vista" action="includes/formMuestraProyectoVoluntario.php" method="POST">
				  				<input type="hidden" name="idProyecto" id="proyecto" value="$id" /> 
				  				<input name="button" type="submit" value="INFORMACION" />
				  		</form>
			  		</div> 
EOS;
			echo $html;  		
		    $iterator->next();
		}		 	
	}

	function muestraProyecto($id){

		$proyecto = $this->ListaProyectos->getProyecto($id);
		$nombre = $proyecto->getNombre();
		$fecha = $proyecto->getFechaCreacion();
		$numVoluntarios =  $proyecto->getNumVoluntarios();
		$imagen = $proyecto->getImagen();
		$descripcion = $proyecto->getDescripcionLarga();
		$html = <<<EOS
		<h1> $nombre </h1>
		<div class="imgDonaciones">
			<img src="$imagen" />
		</div>
		<p> $descripcion </p>
		<div class='proyectoFechas'>Fecha: $fecha </div>		
		<div class='proyectoVoluntario'>Voluntarios necesarios: $numVoluntarios </div>	
		<div class='button' name='button' value='APUNTAME'><button> APUNTAME </button></div>
EOS;
		echo $html;
	}

	function muestraProyectosDonar(){

		$lista = $this->ListaProyectos->getListaProyectosVoluntarios();
		$iterator = $lista->getIterator();

		while($iterator->valid()) {
		  		$nombre =  $iterator->current()->getNombre();
			$imagen = $iterator->current()->getImagen();
			$id = $iterator->current()->getIdProyecto();
			$dineroAcumulado =  $iterator->current()->getDineroAcumulado();
			  	 $html = <<<EOS
  				<div class="contenidoVoluntarios">
				  		<h1> $nombre </h1>
						<div class="imgDonaciones">
				  			<img src="$imagen" />
				  		</div>
				  		<form name="vista" action="includes/formMuestraProyectoDonar.php" method="POST">
				  				<input type="hidden" name="idProyecto" id="proyecto" value="$id" /> 
				  				<input type="hidden" name="dineroAcumulado" id="dinero" value="$dineroAcumulado" /> 
				  				<input name="button" type="submit" value="INFORMACION" />
				  		</form>
			  		</div> 
EOS;
			echo $html;  	
		    $iterator->next();
		}
			 	
	}

}
?>