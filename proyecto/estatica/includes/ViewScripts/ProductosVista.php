<?php
	
	function muestraProductos(){
		require_once '/../ModelScripts/ListaProductos.php';
		
		$ListaProductos = new ListaProductos();

		if(isset($_POST['desc'])){

			$lista = $ListaProductos->getListaProductosPorPrecioDesc();
		}else if(isset($_POST['asc'])){
		
			$lista = $ListaProductos->getListaProductosPorPrecioAsc();
		
		}else{
			$lista = $ListaProductos->getListaProductosPorNombre();
		}
		
		$iterator = $lista->getIterator();

		while($iterator->valid()) {
		  		echo "<div class='producto'> ";
			  		echo "<h1>" . $iterator->current()->getNombreProducto() . "</h1>";
			  		echo "<h3>".$iterator->current()->getNombreONGProducto()."</h3>";
			  		echo "<h3>Precio: ".$iterator->current()->getPrecioProducto()."€ </h3>";
			  		

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
							echo "<input type='hidden' name = 'precioProducto' value = '".$iterator->current()->getPrecioProducto()."'>";

				  			echo "<input type = 'submit' name = 'producto' value ='COMPRAR'>";
			  				echo'</form>';

			  		
			  			
			  	echo "</div>";
		    $iterator->next();
		}
		
			 	
	}



	/*

		<h3><?php echo $tienda->getNombreProductos($i) ?></h3>
			
		<form action="vistaProducto.php" method = "post">
		
			<input type="hidden" name="pid" value= "<?php echo $i; ?> " />
		    <input type="image" id= "imagenProducto" src="img/default-image.jpg" alt = "submit">
		</form>
		
		<h3><?php echo $tienda->getNombreONGProductos($i) ?></h3>
		<h3 class="precio"> Precio: <?php echo $tienda->getPrecioProductos($i) ?>€</h3>
	*/

	function muestraProducto($id){
		require_once '/../ModelScripts/ListaProductos.php';
		
		$ListaProductos = new ListaProductos();

		$producto = $ListaProductos->getProducto($id);
		
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
					echo '<select nombre= "unidades">';
						for($i =1; $i <= $producto->getstockProducto(); $i++){
			  				echo "<option value = '".$i."'>".$i."</option>";	
			  			}
					echo '</select>';
					echo "<input type = 'submit' name = 'producto' value ='COMPRAR'>";
					
				echo '</form>';			
			echo '</div>';

	}


?>

