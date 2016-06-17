<?php
	
	require_once '/../DaoScripts/DaoProductos.php';

	class ListaProductos{

		public function getListaProductosPorNombre(){
			$dao = new DaoProductos();
			return ($dao->cargarDatosProductoPorNombre());
		}

		public function getListaProductosPorPrecioAsc(){
			$dao = new DaoProductos();
			return ($dao->cargarDatosProductoPorPrecioMenor());
		}

		public function getListaProductosPorPrecioDesc(){
			$dao = new DaoProductos();
			return ($dao->cargarDatosProductoPorPrecioMayor());
		}

		public function getProducto($idProducto){
			$dao = new DaoProductos();
			return ($dao->cargaProducto($idProducto));
		}
	}

?>