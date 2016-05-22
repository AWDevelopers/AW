<?php 
	
	class tienda{
		private $listaProductos;
		private $contador;

		public function tienda(){
			$this->contador = 0;			
		}

		public function getNombreProductos($i){
			return $this->listaProductos[$i]->getNombreProducto();
		}
		public function getPrecioProductos($i){
			return $this->listaProductos[$i]->getPrecioProducto();
		}
		public function getStockProductos($i){
			return $this->listaProductos[$i]->getStockProducto();
		}
		public function getNombreONGProductos($i){
			return $this->listaProductos[$i]->getNombreONGProducto();
		
		}
		public function getContador(){
			return $this->contador;
		}
		

		public function cargarDatosTienda(){
			include 'includes/config.php';
			include 'includes/scriptProducto.php';

			$sqlProductos = "SELECT * FROM producto";
			if($result = $connection->query($sqlProductos )){
				
				$nFilas = $result->num_rows;
				$this->contador = $nFilas;
				$result->close();
			}
			
			

			for($i = 1; $i <= $this->contador; $i++){
				$this->listaProductos[$i] = new producto($i);
				$this->listaProductos[$i]->cargarDatosProducto();
				
			}
		

		}

	}

?>
