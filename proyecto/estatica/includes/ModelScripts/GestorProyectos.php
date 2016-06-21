<?php

	class GestorProyectos{

		private $dao;
		function __construct(){
			require_once '/../DaoScripts/DaoProyectos.php';
			require_once '/../DaoScripts/DaoOngs.php';
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
			/* $this->retiraEtiquetas($id); //LIMPIAMOS DE ETIQUETAS HTMLS Y PHP */
			return ($this->dao->seleccionaProyecto($id));
		}
		/* private function retiraEtiquetas(&$columns) {
		    foreach ($columns as $n) {
		       $n=htmlspecialchars(trim(strip_tags($n)));
		    }
		} */
		public function nuevoProyecto($nombre,$cif,$dineroNecesario,$descripcionCorta,$descripcionLarga,$imagen, $numVoluntarios, $fechaFin, $rol){
/* 			$this->retiraEtiquetas($nombre,$cif,$dineroNecesario,$descripcionCorta,$descripcionLarga,$imagen, $numVoluntarios, $fechaFin); //LIMPIAMOS DE ETIQUETAS HTMLS Y PHP
 */			$daoO = new DaoOngs();
			$end_time   =   strtotime($fechaFin);
			$cur_time   =   strtotime("now");
			$dineroAcumulado = 0;
			if($end_time > $cur_time){
				if($daoO->seleccionaOng($cif) != null){
					return ($this->dao->insertaProyecto($nombre,$cif,$dineroNecesario,$descripcionCorta,$descripcionLarga,$imagen, $numVoluntarios,$dineroAcumulado,$fechaFin));
				}
			}
			return null;
		}

		
	}

?>