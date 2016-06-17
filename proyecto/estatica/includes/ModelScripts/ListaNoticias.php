<<<<<<< HEAD:proyecto/estatica/includes/ModelScripts/ListaNoticias.php
<?php
	require_once '/../DaoScripts/DaoNoticias.php';
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
=======
<?php
	require_once '/../DaoScripts/DaoNoticias.php';
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
		
		public function getNoticia($id){
			$dao = new DaoNoticias();
			return ($dao->seleccionaNoticia($id));
		}
	}
?>
>>>>>>> 66658948511fe9aadb10506acf1f68f7b9dac667:proyecto/estatica/ModelScripts/ListaNoticias.php
