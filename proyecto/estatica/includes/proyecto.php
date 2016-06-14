<?php
	
	class Proyecto{
		private $idProyecto;
		private $CIFOng;
		private $fechaCreacion;
		private $dineroNecesario;
		private $dineroAcumulado;
		private $nombre;
		private $descripcionCorta;
		private $descripcionLarga;
		private $rutaImagen;

		public function Proyecto($id){
			$this->idProyecto = $id;
			cargarDatosProyecto($id);
		}

		public function getNombre(){
			return $this->nombre;
		}
		public function getDineroNecesario(){
			return $this->dineroNecesario;
		}

		public function getDineroAcumulado(){
			return $this->dineroAcumulado;
		}
		public function getCIFOng(){
			return $this->CIFOng;
		}
		public function getFechaCreacion(){
			return $this->fechaCreacion;
		}
		public function getDescCorta(){
			return $this->descripcionCorta;
		}
		public function getDescLarga(){
			return $this->descripcionLarga;
		}
		public function getRutaImagen(){
			print $this->rutaImagen;
		}

		public function cargarDatosProyecto($idProyecto){
			include 'includes/config.php';

			$sql = "SELECT * FROM proyecto WHERE idProyecto = $this->idProyecto";
			$consulta = $connection->query($sql);

			if(!$consulta|| $consulta->num_rows === 0){
				echo "Se ha producido un error con proyectos, inténtalo más tarde.";
				exit;
			}
			$datos = $consultaP->fetch_assoc();
			
			$this->nombre = $datos['nombre'];
			$this->CIFOng = $datos['CIFOng'];
			$this->fechaCreacion = $datos['fechaCreacion'];
			$this->dineroAcumulado = $datos['dineroAcumulado'];
			$this->dineroNecesario = $datos['dineroNecesario'];
			$this->descripcionCorta = $datos['descripcionCorta'];
			$this->descripcionLarga = $datos['descripcionLarga'];
			$this->rutaImagen = $datos['imagen'];
		}

	}


?>