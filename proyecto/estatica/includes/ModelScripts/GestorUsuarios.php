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
			//$dao= new DaoUsuarios();
			$ok =true;
			$inicio=true;
			if(($this->dao->usuarioCorrecto($user)==0)){
				$inicio=false;
			}
			else{
				$this->dao->comprobarLogin($user, $pass);
			}
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