<?php
	
	require_once '/../DaoScripts/DaoVoluntarios.php';

	class GestorVoluntarios{

		private $dao;
		function __construct(){
			$this->dao = new DaoVoluntarios();
		}
		public function getListaVoluntarios(){
			$lista = $this->dao->listaVoluntarios());
			$array = new ArrayObject();
			for($i= 0; $i <sizeof($lista) ; $i++){
			$array->append(new voluntario($lista[$j]['idProyecto'], $lista[$j]['DNIUsuario'], $lista[$j]['dia'], $lista[$j]['horaEntrada'], $lista[$j]['horaSalida']));			
			}
			return $array;
			
		}

		public function nuevoVoluntariado($idProyecto,$dniUsuario,$dia,$horaEntrada,$horaSalida, $rol){
			$daoU = new DaoUsuarios();
			if($daoU->seleccionaUsuario($dniUsuario) != null){
			#$app =  App::getSingleton();
			#if($app->tieneRol($rol))
				return ($this->dao->insertaVoluntario($idProyecto,$dniUsuario,$dia,$horaEntrada,$horaSalida));
			}

			return null;
		}


	}

?>