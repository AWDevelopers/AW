<?php

	function realizaCompra(){
		/**/


	}
	function muestraCompra($unidades, $nombreProducto, $precioProducto){
		
		//if (isset($_SESSION['login']) && $_SESSION['login']) {
		
			$precioFinal = $unidades * $precioProducto;
			echo "<h3>Desea comprar ".$unidades." de ".$nombreProducto." por ".$precioFinal."€?</h3>";

			echo "<form action='includes/formCompra.php'  name='compra' method ='POST'>
					<input type= 'submit' value ='CONFIRMAR' name ='compra'/>
					<input type= 'submit' value ='CANCELAR' name ='compra'/>
				 </form>";
/*
		}else{
			echo "<h1>Regístrate o inicia sesión para comprar el producto</h1>";
		}
*/				
	}

?>