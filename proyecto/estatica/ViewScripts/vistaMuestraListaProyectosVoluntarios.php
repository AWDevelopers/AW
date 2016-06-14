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
			  		echo '<form name="vistaProyecto" action="vistaProyecto.php" method="POST"><input type="hidden" name="nombreProyecto" id="proyecto" value="'. $iterator->current()->getIdProyecto() . '"><input type="submit" value="APUNTARSE"></form>';
			  	echo "</div>";
		    $iterator->next();
		}
			 	
	}

?>