<?php
	require_once '/../DaoScripts/DaoProyectos.php';
	class ListaProyectos{

		
		public function getListaProyectosVoluntarios(){
			$dao = new DaoProyectos();
			return ($dao->listaProyectosVoluntarios());
		}

		public function getProyecto($id){
			$dao = new DaoProyectos();
			return ($dao->seleccionaProyecto($id));
		}

		public function nuevoProyecto($json){
			$dao = new DaoProyectos();
			return ($dao->insertaProyecto($json));
		}
	}

?>