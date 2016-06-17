<?php
	require_once '/../DaoScripts/DaoProyectos.php';
	class GestorProyectos{

		
		public function getListaProyectosVoluntarios(){
			$dao = new DaoProyectos();
			$lista = $dao->listaProyectosVoluntarios();
			$array = new ArrayObject();
			for($i= 0; $i <sizeof($lista) ; $i++){
			$array->append(new Proyectos($lista[$i]['idProyecto'], $lista[$i]['CIFOng'], $lista[$i]['fechaCreacion'], $lista[$i]['dineroNecesario'], $lista[$i]['dineroAcumulado'], $lista[$i]['nombre'], $lista[$i]['descripcionCorta'], $lista[$i]['descripcionLarga'], $lista[$i]['imagen'],$lista[$i]['numVoluntarios']));
			}
			return $array;
		}

		public function getProyecto($id){
			$dao = new DaoProyectos();
			return ($dao->seleccionaProyecto($id));
		}

		public function nuevoProyecto($nombre,$cif,$dineroNecesario,$descripcionCorta,$descripcionLarga,$imagen, $numVoluntarios){
			$dao = new DaoProyectos();
			//EXISTE CIF
			//TIENE ROL (ADMIN)
			return ($dao->insertaProyecto($nombre,$cif,$dineroNecesario,$descripcionCorta,$descripcionLarga,$imagen, $numVoluntarios,$dineroAcumulado));
		}
	}

?>