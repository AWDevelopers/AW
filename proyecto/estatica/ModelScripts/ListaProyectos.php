<?php

	class ListaProyectos{

		public function getListaProyectosVoluntarios(){
			require_once '/../DaoScripts/DaoProyectos.php';
			$dao = new DaoProyectos();
			
			$lista = $dao->listaProyectosVoluntarios();
			
			return $lista;
		}
	}

?>