<?php
	require_once '/../DaoScripts/DaoProductos.php';
	class GestorProductos{
		private $dao;
		function __construct(){
			$this->dao = new DaoProductos();
		}

		public function cargarNombreONG($CIFOng){
			$dao = new DaoProductos();
			return ($dao->cargarNombreONG($CIFOng));
		}

		public function cargarDatosProductoPorNombre(){
			$dao = new DaoProductos();
			$lista = $dao->cargarDatosProductoPorNombre();
			$array = new ArrayObject();

			for($i= 0; $i <(sizeof($lista)-1) ; $i++){

				//$nombreONG = $this->cargarNombreONG($lista[$i]['CIFOng']);
				
				$array->append(new Producto($lista[$i]['idProducto'], $lista[$i]['CIFOng'],$lista[$i]['stock'],$lista[$i]['precio'],$lista[$i]['nombre'], $lista[$i]['descripcionCorta'], $lista[$i]['descripcionLarga'], $lista[$i]['imagen']));
			}
			return $array;
		}

		public function cargarDatosProductoPorPrecioMayor(){
			$dao = new DaoProductos();
			$lista = $dao->cargarDatosProductoPorPrecioMayor();
			$array = new ArrayObject();
			for($i= 0; $i <(sizeof($lista)-1) ; $i++){
				//$nombreONG = cargarNombreONG($lista[$i]['CIFOng']);
				$array->append(new Producto($lista[$i]['idProducto'], $lista[$i]['CIFOng'],$lista[$i]['stock'],$lista[$i]['precio'],$lista[$i]['nombre'], $lista[$i]['descripcionCorta'], $lista[$i]['descripcionLarga'], $lista[$i]['imagen']));
			}
			return $array;
		}

		public function cargarDatosProductoPorPrecioMenor(){
			$dao = new DaoProductos();
			$lista = $dao->cargarDatosProductoPorPrecioMenor();
			$array = new ArrayObject();
			for($i= 0; $i <(sizeof($lista)-1) ; $i++){
				$array->append(new Producto($lista[$i]['idProducto'], $lista[$i]['CIFOng'],$lista[$i]['stock'],$lista[$i]['precio'],$lista[$i]['nombre'], $lista[$i]['descripcionCorta'], $lista[$i]['descripcionLarga'], $lista[$i]['imagen']));
			}
			return $array;
		}
		
		public function getProducto($id){
			return ($this->dao->cargaProducto($id));
		}

		public function nuevoProducto($idProducto, $CIFOng, $stock, $precio, $nombre,$descripcionCorta, $descripcionLarga, $imagen ){
			return ($this->dao->insertaProducto($nombre,$cif,$dineroNecesario,$descripcionCorta,$descripcionLarga,$imagen, $numVoluntarios,$dineroAcumulado));
		}

		public function borrarProducto($id){
			$this->dao->borrarProducto($id);
		}

		public function insertaProducto($idProducto, $nombreOng, $stock, $precio, $nombre,$descripcionCorta, $descripcionLarga, $imagen){
			$this->dao->insertaProducto($idProducto, $nombreOng, $stock, $precio, $nombre,$descripcionCorta, $descripcionLarga, $imagen);
		}

		public function modificaProducto($idProducto, $nombreOng, $stock, $precio, $nombre,$descripcionCorta, $descripcionLarga, $imagen){
			$this->dao->modificaProducto($idProducto, $nombreOng, $stock, $precio, $nombre,$descripcionCorta, $descripcionLarga, $imagen);
		}
        
	}
?>