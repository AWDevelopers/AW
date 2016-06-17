<?php
	require_once '/../DaoScripts/DaoProyectos.php';
	class GestorProyectos{

		private $dao;
		function __construct(){
			$this->dao = new DaoProyectos();
		}
		public function getListaProyectosVoluntarios(){
			$lista = $this->dao->listaProyectosVoluntarios();
			$array = new ArrayObject();
			for($i= 0; $i <sizeof($lista) ; $i++){
			$array->append(new Proyectos($lista[$i]['idProyecto'], $lista[$i]['CIFOng'], $lista[$i]['fechaCreacion'], $lista[$i]['dineroNecesario'], $lista[$i]['dineroAcumulado'], $lista[$i]['nombre'], $lista[$i]['descripcionCorta'], $lista[$i]['descripcionLarga'], $lista[$i]['imagen'],$lista[$i]['numVoluntarios']));
			}
			return $array;
		}

		public function getProyecto($id){
			return ($this->dao->seleccionaProyecto($id));
		}

		public function nuevoProyecto($nombre,$cif,$dineroNecesario,$descripcionCorta,$descripcionLarga,$imagen, $numVoluntarios, $fechaFin, $rol){
			$daoO = new DaoOngs();
			$end_time   =   strtotime($fechaFin);
			$cur_time   =   strtotime(now);
			if($end_time > $cur_time){
				#if($daoO->seleccionaOng($cif) != null){
				#$app =  App::getSingleton();
				#if($app->tieneRol($rol))
					return ($this->dao->insertaProyecto($nombre,$cif,$dineroNecesario,$descripcionCorta,$descripcionLarga,$imagen, $numVoluntarios,$dineroAcumulado));
				#}
			}
			return null;
		}
	}

?>