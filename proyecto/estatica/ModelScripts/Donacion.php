<?php

	class Donacion{
		
		private $iddonacion;
		private $dniusuario;
		private $idproyecto;
		private $cantidad;

		/*---------------- CONSTRUCTORA ------------------*/
		function __construct($dniusuario, $idproyecto, $cantidad){
			$this->dniusuario=$dniusuario;
			$this->idproyecto=$idproyecto;
			$this->cantidad=$cantidad;
		}

		/*-----------------MÉTODOS GET --------------------*/
		public function getDonacionesId($i){
			return $this->iddonacion;
		}
		public function getDniUsuario($i){
			return $this->dniusuario;
		}
		public function getProyectoId($i){
			return $this->idproyecto;
		}
		public function getDonacion($i){
			return $this->cantidad;
		}
	}
?>
