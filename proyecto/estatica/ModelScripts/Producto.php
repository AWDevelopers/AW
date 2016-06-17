<?php
	
	class Producto{
		private $idProducto;
		private $stock;
		private $precio;
		private $nombre;
		private $descripcionCorta;
		private $descripcionLarga;
		private $nombreOng;
		private $imagen;

		function Producto($idProducto, $nombreOng, $stock, $precio, $nombre, $descCorta, $descLarga, $imagen){
			$this->idProducto = $idProducto;
			$this->stock = $stock;
			$this->precio = $precio;
			$this->nombre = $nombre;
			$this->descripcionCorta = $descCorta;
			$this->descripcionLarga = $descLarga;
			$this->nombreOng = $nombreOng;
			$this->imagen = $imagen;
		}

		public function getIdProducto(){
			return $this->idProducto;
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
		public function getNombreONGProducto(){
			return $this->nombreOng;
		}
		public function getDescLargaProducto(){
			return $this->descripcionLarga;
		}
		public function getDescCortaProducto(){
			return $this->descripcionCorta;
		}
		public function getImagen(){
			print $this->imagen;
		}


		

		
	}


?>