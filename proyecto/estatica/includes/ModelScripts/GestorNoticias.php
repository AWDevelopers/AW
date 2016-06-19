<?php
	require_once '/../DaoScripts/DaoNoticias.php';
	class GestorNoticias{
		public function getListaNoticias(){
			$dao = new DaoNoticias();
			$lista = $dao->listaNoticias();
			$array = new ArrayObject();
			for($i= 0; $i <sizeof($lista) ; $i++){
			$array->append(new noticia($lista[$i]['id'], $lista[$i]['titulo'],$lista[$i]['tipo'], $lista[$i]['descripcionCorta'], $lista[$i]['descripcionLarga'], $lista[$i]['imagen'],$lista[$i]['fecha']));
			}
			return $array;
		}
		public function getListaNoticiasPrimarias(){
			$dao = new DaoNoticias();
			$lista = $dao->listaNoticiasPrimarias();
			$array = new ArrayObject();
			for($i= 0; $i <sizeof($lista) ; $i++){
			$array->append(new noticia($lista[$i]['id'], $lista[$i]['titulo'],$lista[$i]['tipo'], $lista[$i]['descripcionCorta'], $lista[$i]['descripcionLarga'], $lista[$i]['imagen'],$lista[$i]['fecha']));
			}
			return $array;
		}
		
		public function getListaNoticiasSecundarias(){
			$dao = new DaoNoticias();
			$lista = $dao->listaNoticiasSecundarias();
			$array = new ArrayObject();
			for($i= 0; $i <sizeof($lista) ; $i++){
			$array->append(new noticia($lista[$i]['id'], $lista[$i]['titulo'], $lista[$i]['tipo'], $lista[$i]['descripcionCorta'], $lista[$i]['descripcionLarga'], $lista[$i]['imagen'],$lista[$i]['fecha']));
			}
			return $array;
		}
		
		public function getListaNoticiasTerciarias(){
			$dao = new DaoNoticias();
			$lista = $dao->listaNoticiasTerciarias();
			$array = new ArrayObject();
			for($i= 0; $i <sizeof($lista) ; $i++){
			$array->append(new noticia($lista[$i]['id'], $lista[$i]['titulo'], $lista[$i]['tipo'], $lista[$i]['descripcionCorta'], $lista[$i]['descripcionLarga'], $lista[$i]['imagen'],$lista[$i]['fecha']));
			}
			return $array;
		}
		
		public function getListaNoticiasOtras(){
			$dao = new DaoNoticias();
			$lista = $dao->listaNoticiasOtras();
			$array = new ArrayObject();
			for($i= 0; $i <sizeof($lista) ; $i++){
                            $array->append(new noticia($lista[$i]['id'], $lista[$i]['titulo'], $lista[$i]['tipo'], $lista[$i]['descripcionCorta'], $lista[$i]['descripcionLarga'], $lista[$i]['imagen'],$lista[$i]['fecha']));
			}
			return $array;
		}
		public function eliminaNoticia($id){
			$dao = new DaoNoticias();
			$dao->eliminaNoticia($id);
		}
		
		public function nuevaNoticia($titulo, $tipo , $descripcionCorta, $descripcionLarga, $imagen, $fecha){
			$dao = new DaoNoticias();
                        //Comprobacion q la noticia ya existe?
                        if(!$dao->existeNoticia($titulo)){
                            return ($dao->insertaNoticia($titulo,$tipo,$descripcionCorta, $descripcionLarga, $imagen, $fecha));
                        }
                        else{
                            return false;
                        }     
		}
                
                 public function getNoticia($id){
			$dao = new DaoNoticias();
			return ($dao->seleccionaNoticia($id));
		}
	}
?>
