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
				$array->append(new Usuario($lista[$i]['nombre'], $lista[$i]['DNI'],$lista[$i]['apellidos'], $lista[$i]['direccion'], $lista[$i]['cp'],
				$lista[$i]['usuario'],$lista[$i]['pass'],$lista[$i]['email'],$lista[$i]['fechaNacimiento'], $lista[$i]['avatar'],$lista[$i]['sexo'],$lista[$i]['telefono'],
				$lista[$i]['tipo']));
			}
			return $array;
		}
		
		public function comprobarLogin($user, $pass){
			if(($this->dao->usuarioCorrecto($user) == 0)){
				//usuario no correct, no existe
				$login=0;
				return $login;
			}
			else{
				$login = $this->dao->compruebaLogin($user, $pass);
				return $login;
			}
		}
		
		public function comprobarDNI($dni){
			$dni = $_REQUEST['dni'];
			$letra = substr($dni, -1);
			$numeros = substr($dni, 0, -1);
			if ( substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros%23, 1) == $letra && strlen($letra) == 1 && strlen ($numeros) == 8 ){
				return true;
			}else{
				return false;
			}
		}
		public function nuevoUsuario($user, $pass, $nombre, $apellidos, $dni, $email, $fechaNacimiento, $sexo, $telefono, $direccion, $cp, $avatar ){
			//No existe el usuario
			if ($this->comprobarDNI($dni) && strlen($pass)>5){
			  if($this->dao->existeUsuario($dni, $email, $user) == 0){
					$this->dao->insertaUsuario($user, $pass, $nombre, $apellidos, $dni, $email, $fechaNacimiento, $sexo, $telefono, $direccion, $cp, $avatar );
					return true;
				}    
				else{
					return false;
				}
			}
			else{
				return false;
			}
        
		}
	}
?>