<?php
	require_once '/../DaoScripts/DaoProyectos.php';
	class ListaProyectos{

		public function getListaProyectosVoluntarios(){
			$dao = new DaoProyectos();
			return ($dao->listaProyectosVoluntarios());
		}
	}

?>