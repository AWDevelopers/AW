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
			for($i= 0; $i <sizeof($lista)-1 ; $i++){
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

		public function getVoluntarios($idProyecto){
			 //$this->retiraEtiquetas($id); //LIMPIAMOS DE ETIQUETAS HTMLS Y PHP */
			htmlspecialchars(trim(strip_tags($idProyecto)));
			return ($this->dao->seleccionaVoluntarios($idProyecto));
		}

		public function getVoluntariosPorONG($cifOng){
			 //$this->retiraEtiquetas($id); //LIMPIAMOS DE ETIQUETAS HTMLS Y PHP */
			htmlspecialchars(trim(strip_tags($cifOng)));
			return ($this->dao->seleccionaVoluntariosONG($cifOng));
		}

		public function getVoluntariosPorONG($dni){
			 //$this->retiraEtiquetas($id); //LIMPIAMOS DE ETIQUETAS HTMLS Y PHP */
			htmlspecialchars(trim(strip_tags($dni)));
			return ($this->dao->seleccionaVoluntariosUsuario($dni));
		}
	}

?>