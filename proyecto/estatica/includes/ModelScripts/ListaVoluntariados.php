<?php
	
	require_once '/../DaoScripts/DaoVoluntarios.php';

	class ListaVoluntariados{

		public function getListaVoluntarios(){
			$dao = new DaoVoluntarios();
			return ($dao->listaVoluntarios());
		}
	}

?>