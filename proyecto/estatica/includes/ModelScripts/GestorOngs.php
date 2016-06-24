<?php
	require_once '/../DaoScripts/DaoOngs.php';
	class GestorOngs{

		private $daoOngs;

		function __construct(){
			
			$this->daoOngs = new DaoOngs();
		}


		public function seleccionaOng($cif){
			return ($this->daoOngs->seleccionaOng($cif));
		}

		public function modificaTelefono($nuevo, $actual){
			$dao = new DaoOngs();
			return ($dao->modifyTelefono($nuevo, $actual));
		}

		public function modificaNombre($nuevo, $actual){
			$dao = new DaoOngs();
			return ($dao->modifyNombre($nuevo, $actual));
		}
		public function modificaUsuario($nuevo, $actual){
			$dao = new DaoOngs();
			return ($dao->modifyUsuario($nuevo, $actual));
		}
		public function modificaPass($nuevo, $actual){
			$dao = new DaoOngs();
			return ($dao->modifyPass($nuevo, $actual));
		}
		public function modificaDir($nuevo, $actual){
			$dao = new DaoOngs();
			return ($dao->modifyDireccion($nuevo, $actual));
		}
		public function modificaMail($nuevo, $actual){
			$dao = new DaoOngs();
			return ($dao->modifyEmail($nuevo, $actual));
		}

		public function deleteOng($cif){
			$dao = new DaoOngs();
			return ($dao->deleteOng($cif));
		}
		public function addOng($cif, $nombre, $dir, $mail, $user, $pass, $tlf){
			$dao = new DaoOngs();
			return ($dao->addOng($cif, $nombre, $dir, $mail, $user, $pass, $tlf));
		}
		
	}

?>