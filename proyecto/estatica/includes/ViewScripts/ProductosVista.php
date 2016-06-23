<?php
	class vistaProductos{
		
		private $ListaProductos;

		function __construct(){
			require_once '/../ModelScripts/GestorProductos.php';
			$this->ListaProductos = new GestorProductos();
		}
			
		function muestraProductos(){
		

			if(isset($_POST['desc'])){

				$lista = $this->ListaProductos->cargarDatosProductoPorPrecioMayor();
			}else if(isset($_POST['asc'])){
			
				$lista = $this->ListaProductos->cargarDatosProductoPorPrecioMenor();
			
			}else{
				$lista = $this->ListaProductos->cargarDatosProductoPorNombre();
			}
			
			$iterator = $lista->getIterator(); 

			while($iterator->valid()) {
			  		echo "<div class='producto'> ";
				  		echo "<h1>" . $iterator->current()->getNombreProducto() . "</h1>";
				  		//echo "<h3>".$iterator->current()->getNombreONGProducto()."</h3>";
				  		
				  		//MOSTRAR PRODUCTO
				  		echo '<form name="muestra" action="includes/formProductos.php" method="POST">
			  				<input  type = "hidden" name="idProducto" id="producto" value="'.$iterator->current()->getIdProducto().'"> 
			  				<input type="image" id = "imagenProducto" name = "producto" value="MUESTRA" src="'.$iterator->current()->getImagen().'" alt = "submit">';

			  				echo "<p> Unidades:  </p>";
			  				echo "<select id='unidades' name ='unidades'>";
				  				for($i =1; $i <= $iterator->current()->getstockProducto(); $i++){
				  					echo "<option value = '".$i."'>".$i."</option>";	
				  				}
				  			echo "</select>";

				  			
				  			echo "<input type='hidden' name = 'nombreProducto' value = '".$iterator->current()->getNombreProducto()."'>";
				  			echo "<h3>Precio: ".$iterator->current()->getPrecioProducto()."€ </h3>";
				  		
							echo "<input type='hidden' name = 'precioProducto' value = '".$iterator->current()->getPrecioProducto()."'>";

				  			echo "<input type = 'submit' name = 'producto' value ='COMPRAR'>";
				  		echo'</form>';

				  								  		
				  			
				  	echo "</div>";
			    $iterator->next();
			}				 	
		}


		function muestraProducto($id){
			$producto = $this->ListaProductos->getProducto($id);
			
			echo '<div class="columnaIzda">';
				echo "<h1>".$producto->getNombreProducto()."</h1>";
				echo '<img src="'.$producto->getImagen().'"/>';
				echo '<h1>'.$producto->getNombreONGProducto().'</h1>';
				echo '<h3>'.$producto->getDescCortaProducto() .'</h3>';
				echo '<p>'.$producto->getDescLargaProducto() .'</p>';	
			echo '</div>';
				
				echo '<div class="columnaDcha">';
			
					
					echo '<h3>Precio: '.$producto->getPrecioProducto().'€</h3>';
					echo '<p>Num.Unidades'.$producto->getStockProducto().'</p>';

				echo '<form name="muestra" action="includes/formProductos.php" method="POST">';
					echo'<input  type = "hidden" name="idProducto" id="producto" value="'.$producto->getIdProducto().'"> ';
					echo "<input type='hidden' name = 'nombreProducto' value = '".$producto->getNombreProducto()."'>";
					echo "<input type='hidden' name = 'precioProducto' value = '".$producto->getPrecioProducto()."'>";
						
						echo '<select name= "unidades">';

							for($i =1; $i <= $producto->getstockProducto(); $i++){
				  				echo "<option value = '".$i."'>".$i."</option>";	
				  			}

						echo '</select>';
						echo "<input type = 'submit' name = 'producto' value ='COMPRAR'>";
						
					echo '</form>';			
				echo '</div>';

		}

		function muestraBorrarProductos(){
			$lista = $this->ListaProductos->cargarDatosProductoPorNombre();
			
			$iterator = $lista->getIterator(); 

			while($iterator->valid()) {
			  		echo "<div class='producto'> ";
				  		echo "<h1>" . $iterator->current()->getNombreProducto() . "</h1>";
				  		//echo "<h3>".$iterator->current()->getNombreONGProducto()."</h3>";
				  		
				  		//MOSTRAR PRODUCTO
				  		echo '<form name = "borraProducto" action = "includes/formProductos.php" method = "POST">
			  				<input  type = "hidden" name="idProducto" id="producto" value="'.$iterator->current()->getIdProducto().'"> 
			  				<input type="image" id = "imagenProducto" name = "producto" value="MUESTRA" src="'.$iterator->current()->getImagen().'" alt = "submit">';

			  				echo "<p> Unidades:  </p>";
			  				echo "<select id='unidades' name ='unidades'>";
				  				for($i =1; $i <= $iterator->current()->getstockProducto(); $i++){
				  					echo "<option value = '".$i."'>".$i."</option>";	
				  				}
				  			echo "</select>";

		  					echo ' <INPUT type="radio" name="borrarEste" value="'.$iterator->current()->getIdProducto().'">';
						   
							
							echo '<input type= "hidden" name = "idProducto" value = "'.$iterator->current()->getIdProducto().'">';
							echo '<input type = "submit" name = "producto" value = "BORRAR" >';
							echo '</form>';
							
							  		
				  			
				  	echo "</div>";
			    $iterator->next();
			}				 	
		}

		function borrarProducto($id){
			$producto = $this->ListaProductos->getProducto($id);

		}

	}
?>

