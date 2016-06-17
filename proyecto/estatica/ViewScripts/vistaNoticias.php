<?php
	require_once '/../ModelScripts/ListaNoticias.php';
	
	function muestraNoticia($id){		
		$ListaNoticias= new ListaNoticias();
		$noticia = $ListaNoticias->getNoticia($id);
		echo "<h1> ".$noticia->getTitulo()."</h1>";
		echo "<p> ".$noticia->getFecha()."</p>";
                echo '<img src="' .$noticia->getImagen(). '">'; //Mostramos la imagen
                echo "<p> ".$noticia->getDescripcionLarga()."</p>";

        }
        
	function muestraNoticiasPrimarias(){
		$ListaNoticias = new ListaNoticias();
		$lista = $ListaNoticias->getListaNoticiasPrimarias();
		$iterator = $lista->getIterator();
		while($iterator->valid()) {
		  		echo "<div class='principal'>";	
			  		echo '<img src="' .$iterator->current()->getImagen() . '">'; //Mostramos la imagen
					echo "<h2>" . $iterator->current()->getTitulo() . "</h2>"; //Mostramos el titulo
					echo "<p>" . $iterator->current()->getDescripcionCorta() . "<p>"; //Mostramos la descripcion
			  	echo "</div>";
		    $iterator->next();
		}	 	
	}
	
	function muestraNoticiasSecundarias(){
		$ListaNoticias = new ListaNoticias();
		$lista = $ListaNoticias->getListaNoticiasSecundarias();
		$iterator = $lista->getIterator();
		while($iterator->valid()) {
		  		echo "<div class='secundaria'>";	
			  		echo '<img src="' .$iterator->current()->getImagen() . '">'; //Mostramos la imagen
					echo "<h3>" . $iterator->current()->getTitulo() . "</h3>"; //Mostramos el titulo
					echo "<p>" . $iterator->current()->getDescripcionCorta() . "<p>"; //Mostramos la descripcion
			  	echo "</div>";
		    $iterator->next();
		}	
	}
	
	function muestraNoticiasTerciarias(){
		$ListaNoticias = new ListaNoticias();
		$lista = $ListaNoticias->getListaNoticiasTerciarias();
		$iterator = $lista->getIterator();
		while($iterator->valid()) {
		  		echo "<div class='terciaria'>";	
			  		echo '<img src="' .$iterator->current()->getImagen() . '">'; //Mostramos la imagen
					echo "<h4>" . $iterator->current()->getTitulo() . "</h4>"; //Mostramos el titulo
					echo "<p>" . $iterator->current()->getDescripcionCorta() . "<p>"; //Mostramos la descripcion
			  	echo "</div>";
		    $iterator->next();
		}	
	}
	
	function muestraNoticiasOtras(){
		$ListaNoticias = new ListaNoticias();
		$lista = $ListaNoticias->getListaNoticiasOtras();
		$iterator = $lista->getIterator();
		while($iterator->valid()) {
		  		echo "<div class='terciaria'>";	
			  		echo '<img src="' .$iterator->current()->getImagen() . '">'; //Mostramos la imagen
					echo "<h5>" . $iterator->current()->getTitulo() . "</h5>"; //Mostramos el titulo
					echo "<p>" . $iterator->current()->getDescripcionCorta() . "<p>"; //Mostramos la descripcion
			  	echo "</div>";
		    $iterator->next();
		}	
	}
?>
