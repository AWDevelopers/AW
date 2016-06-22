<?php
	
	

	class GestorVoluntarios{

		private $dao;
		function __construct(){
			require_once '/../DaoScripts/DaoVoluntarios.php';
			require_once '/../DaoScripts/DaoUsuarios.php';
			$this->dao = new DaoVoluntarios();
		}
		public function getListaVoluntarios(){
			$lista = $this->dao->listaVoluntarios();
			$array = new ArrayObject();
			for($i= 0; $i <sizeof($lista) ; $i++){
			$array->append(new voluntario($lista[$j]['idProyecto'], $lista[$j]['DNIUsuario'], $lista[$j]['dia'], $lista[$j]['horaEntrada'], $lista[$j]['horaSalida']));			
			}
			return $array;
			
		}

		public function nuevoVoluntariado($idProyecto,$dniUsuario,$dia,$horaEntrada,$horaSalida){
			$daoU = new DaoUsuarios();
			//if($daoU->seleccionaUsuario($dniUsuario) != null){
				return ($this->dao->insertaVoluntario($idProyecto,$dniUsuario,$dia,$horaEntrada,$horaSalida));
			//}

			return null;
		}


	}

?>