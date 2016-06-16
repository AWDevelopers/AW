<?php
	
	class Producto{
		private $idProducto;
		private $stock;
		private $precio;
		private $nombre;
		private $descripcionCorta;
		private $descripcionLarga;
		private $CIFOng;
		private $rutaImagen;

		public function Producto($id){
			$this->idProducto = $id;
		}

		public function getNombreProducto(){
			return $this->nombre;
		}
		public function getPrecioProducto(){
			return $this->precio;
		}
		public function getstockProducto(){
			return $this->stock;
		}
		public function getCifONGProducto(){
			return $this->CIFOng;
		}
		public function getDescLargaProducto(){
			return $this->descripcionLarga;
		}
		public function getDescCortaProducto(){
			return $this->descripcionCorta;
		}
		public function getRutaImagen(){
			print $this->rutaImagen;
		}


		private function cargarNombreONG($cifOng){
			include 'includes/config.php';
			$sqlONG = "SELECT nombre FROM ong WHERE CIF = $cifOng";
			$consultaONG= $connection->query($sqlONG);

			if(!$consultaONG || $consultaONG->num_rows === 0){
				echo "Se ha producido un error con, inténtalo más tarde.";
				exit;
			}
			
			
			$datosONG = $consultaONG->fetch_assoc();

			return $datosONG['nombre'];
		}

		public function cargarDatosProducto(){
			include 'includes/config.php';

			$sqlProducto = "SELECT * FROM Producto WHERE idProducto = $this->idProducto";
			$consultaProducto = $connection->query($sqlProducto);

			if(!$consultaProducto|| $consultaProducto->num_rows === 0){
				echo "Se ha producido un error con productos, inténtalo más tarde.";
				exit;
			}
			$datosProducto = $consultaProducto->fetch_assoc();
			
			$this->stock = $datosProducto['stock'];
			$this->precio = $datosProducto['precio'];
			$this->nombre = $datosProducto['nombre'];
			$this->descripcionCorta = $datosProducto['descripcionCorta'];
			$this->descripcionLarga = $datosProducto['descripcionLarga'];
			$this->rutaImagen = $datosProducto['imagen'];
			$this->nombreOng = $this->cargarNombreONG($datosProducto['CIFOng']);
		}

	}


?>