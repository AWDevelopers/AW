<?php
	require_once '/../DaoScripts/DaoNoticias.php';
	class GestorNoticias{
		private $dao;
		function __construct(){
			require_once '/../DaoScripts/DaoNoticias.php';
			$this->dao = new DaoNoticias();
		}
		public function getListaNoticias(){
			$lista = $this->dao->listaNoticias();
			$array = new ArrayObject();
			for($i= 0; $i <sizeof($lista) ; $i++){
			$array->append(new noticia($lista[$i]['id'], $lista[$i]['titulo'],$lista[$i]['tipo'], $lista[$i]['descripcionCorta'], $lista[$i]['descripcionLarga'], $lista[$i]['imagen'],$lista[$i]['fecha']));
			}
			return $array;
		}
		public function getListaNoticiasPrimarias(){
			$lista = $this->dao->listaNoticiasPrimarias();
			$array = new ArrayObject();
			for($i= 0; $i <sizeof($lista) ; $i++){
			$array->append(new noticia($lista[$i]['id'], $lista[$i]['titulo'],$lista[$i]['tipo'], $lista[$i]['descripcionCorta'], $lista[$i]['descripcionLarga'], $lista[$i]['imagen'],$lista[$i]['fecha']));
			}
			return $array;
		}
		
		public function getListaNoticiasSecundarias(){
			$lista = $this->dao->listaNoticiasSecundarias();
			$array = new ArrayObject();
			for($i= 0; $i <sizeof($lista) ; $i++){
			$array->append(new noticia($lista[$i]['id'], $lista[$i]['titulo'], $lista[$i]['tipo'], $lista[$i]['descripcionCorta'], $lista[$i]['descripcionLarga'], $lista[$i]['imagen'],$lista[$i]['fecha']));
			}
			return $array;
		}
		
		public function getListaNoticiasTerciarias(){
			$lista = $this->dao->listaNoticiasTerciarias();
			$array = new ArrayObject();
			for($i= 0; $i <sizeof($lista) ; $i++){
			$array->append(new noticia($lista[$i]['id'], $lista[$i]['titulo'], $lista[$i]['tipo'], $lista[$i]['descripcionCorta'], $lista[$i]['descripcionLarga'], $lista[$i]['imagen'],$lista[$i]['fecha']));
			}
			return $array;
		}
		
		public function getListaNoticiasOtras(){
			$lista = $this->dao->listaNoticiasOtras();
			$array = new ArrayObject();
			for($i= 0; $i <sizeof($lista) ; $i++){
                            $array->append(new noticia($lista[$i]['id'], $lista[$i]['titulo'], $lista[$i]['tipo'], $lista[$i]['descripcionCorta'], $lista[$i]['descripcionLarga'], $lista[$i]['imagen'],$lista[$i]['fecha']));
			}
			return $array;
		}
		public function eliminaNoticia($id){
			$dao->eliminaNoticia($id);
		}
		
		public function nuevaNoticia($titulo, $tipo , $descripcionCorta, $descripcionLarga, $imagen, $fecha){
                        //Comprobacion q la noticia ya existe?
                        if(!$this->dao->existeNoticia($titulo)){
                            return ($this->dao->insertaNoticia($titulo,$tipo,$descripcionCorta, $descripcionLarga, $imagen, $fecha));
                        }
                        else{
                            return false;
                        }     
		}
                
        public function getNoticia($id){
			return ($this->dao->seleccionaNoticia($id));
		}
	}
?>
