<?php
	
	function muestraProyectosVoluntarios(){
		require_once '/../ModelScripts/ListaProyectos.php';
		
		$ListaProyectos = new ListaProyectos();

		$lista = $ListaProyectos->getListaProyectosVoluntarios();
		$iterator = $lista->getIterator();

		while($iterator->valid()) {
		  		echo "<div class='contenidoVoluntarios'>";
			  		echo "<h1>" . $iterator->current()->getNombre() . "</h1>";
			  		echo "<div class='imgDonaciones'>";
			  			echo '<img src="' .$iterator->current()->getImagen() . '">';
			  		echo "</div>";
			  		echo '<form name="vista" action="includes/formProcesaProyectos.php" method="POST">
			  				<input type="hidden" name="idProyecto" id="proyecto" value="' .$iterator->current()->getIdProyecto() . '"> 
			  				<input name="button" type="submit" value="INFORMACION"></form>';
			  	echo "</div>";
		    $iterator->next();
		}
			 	
	}

	function muestraProyecto($id){
		require_once '/../ModelScripts/ListaProyectos.php';
		
		$ListaProyectos = new ListaProyectos();

		$proyecto = $ListaProyectos->getProyecto($id);
		echo "<h1> ".$proyecto->getNombre()."</h1>";
		echo "<p> Aqui va la descripcion del proyecto de la ONG correspondiente </p>";	
		echo "<div class='proyectoFechas'>Fecha: ".$proyecto->getFechaCreacion()."</div>";
					
		echo "<div class='proyectoVoluntario'>Voluntarios necesarios: ".$proyecto->getNumVoluntarios()." </div>";
				
		echo "<div class='boton' name='button' value='APUNTAME'><button> APUNTAME </button></div>";
	}

?>