<?php
	require_once '/../DaoScripts/DaoUsuarios.php';
	class GestorUsuarios{
		
		public function getListaUsuarios(){
			$dao = new DaoUsuarios();
			$lista = $dao->listaUsuarios(();
			$array = new ArrayObject();
			for($i= 0; $i <sizeof($lista) ; $i++){
			//$array->append(new noticia($lista[$i]['id'], $lista[$i]['titulo'],$lista[$i]['tipo'], $lista[$i]['descripcionCorta'], $lista[$i]['descripcionLarga'], $lista[$i]['imagen'],$lista[$i]['fecha']));
			}
			return $array;
		}
		
		
		public function nuevoUsuario($dni, $nombre, $apellidos, $cp, $user, $pass, $email, $fechaNacimiento, $avatar, $sexo, $telefono, $resultado, $direccion ){
			$dao = new DaoNoticias();
                        if(!$dao->existeUsuario($dni, $email)){
                            return ($dao->insertaUsuario($dni, $nombre, $apellidos, $cp, $user, $pass, $email, $fechaNacimiento, $avatar, $sexo, $telefono, $resultado, $direccion));
                        }    
		}
        
                /*Funcion que valida el DNI*/
		public static function validar_dni($dni){
			$letra = substr($dni, -1);
			$numeros = substr($dni, 0, -1);
			if ( substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros%23, 1) == $letra && strlen($letra) == 1 && strlen ($numeros) == 8 ){
				return true;
			}else{
				return false;
			}
		}
	}
?>