<?php
	require_once RAIZ.RUTA_DAO.'DaoProyectos.php';
	require_once RAIZ.RUTA_DAO.'DaoDonaciones.php';
	class GestorDonaciones{

		private $dao;
		function __construct(){
			$this->dao = new DaoProyectos();
			$this->daoD = new DaoDonaciones();

		}

		public function addDonacion($dni, $id, $dinero){
			
			$this->dao->sumaDineroAcumulado($id, $dinero);
			$this->daoD->addDonacion($dni, $id, $dinero);
		}
	}

?>