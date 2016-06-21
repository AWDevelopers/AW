<?php
	class GestorUsuarios{
		private $dao;
		
		function __construct(){
			require_once '/../DaoScripts/DaoUsuarios.php';
			$this->dao = new DaoUsuarios();
			if (!isset($_SESSION)) session_start();
		}
		
		public function getListaUsuarios(){
			$lista = $this->dao->listaUsuarios();
			$array = new ArrayObject();
			for($i= 0; $i <sizeof($lista) ; $i++){
			//$array->append(new noticia($lista[$i]['id'], $lista[$i]['titulo'],$lista[$i]['tipo'], $lista[$i]['descripcionCorta'], $lista[$i]['descripcionLarga'], $lista[$i]['imagen'],$lista[$i]['fecha']));
			}
			return $array;
		}
		
		public function comprobarLogin($user, $pass){
			$ok =true;
			$inicio=true;
			if(($this->dao->usuarioCorrecto($user)==0)){
				$inicio=false;
			}
			else{
				$inicio= $this->dao->compruebaLogin($user, $pass);
			}
			return $inicio;
		}
		
		public function nuevoUsuario($user, $pass, $nombre, $apellidos, $dni, $email, $fechaNacimiento, $sexo, $telefono, $direccion, $cp, $avatar ){
			//No existe el usuario
		   if($this->dao->existeUsuario($dni, $email, $user) == 0){
				return $this->dao->insertaUsuario($user, $pass, $nombre, $apellidos, $dni, $email, $fechaNacimiento, $sexo, $telefono, $direccion, $cp, $avatar );
            }    
			else{
				//Existe el usuario
				return "existe el usuario";
			}
		}
        
	}
?>