<?php
	require_once '/../DaoScripts/DaoNoticia.php';
	class ListaNoticias{
		
		public function getListaNoticiasPrimarias(){
			$dao = new DaoNoticias();
			return ($dao->listaNoticiasPrimarias());
		}
		
		public function getListaNoticiasSecundarias(){
			$dao = new DaoNoticias();
			return ($dao->listaNoticiasSecundarias());
		}
		
		public function getListaNoticiasTerciarias(){
			$dao = new DaoNoticias();
			return ($dao->listaNoticiasTerciarias());
		}
		
		public function getListaNoticiasOtras(){
			$dao = new DaoNoticias();
			return ($dao->listaNoticiasOtras());
		}
		
		public function nuevaNoticia($json){
			$dao = new DaoNoticias();
			return ($dao->insertaNoticia($json));
		}
	}
?>
