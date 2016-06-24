<?php
use \AW\proyecto\estatica\includes\DaoScripts\DaoUsuarios as DaoUsuarios;
	class GestorUsuarios{
		private $dao;
		
		function __construct(){
			$this->dao = DaoUsuarios::new DaoUsuarios();
			if (!isset($_SESSION)) session_start();
		}
		
		public function getListaUsuarios($dni){
			$lista = $this->dao->listaUsuarios($dni);
			$array = new ArrayObject();
			for($i= 0; $i <sizeof($lista)-1 ; $i++){
				$array->append(new Usuario($lista[$i]['nombre'], $lista[$i]['DNI'],$lista[$i]['apellidos'], $lista[$i]['direccion'], $lista[$i]['cp'], $lista[$i]['usuario'],$lista[$i]['pass'],$lista[$i]['email'],$lista[$i]['fechaNacimiento'], $lista[$i]['avatar'],$lista[$i]['sexo'],$lista[$i]['telefono'], $lista[$i]['tipo']));
			}
			return $array;
		}
		
		public function comprobarLogin($user, $pass){
			$userN = htmlspecialchars(trim(strip_tags($user)));
			$passN = htmlspecialchars(trim(strip_tags($pass)));
			
			if(($this->dao->usuarioCorrecto($userN) == 0)){
				//usuario no correct, no existe
				$login=0;
				return $login;
			}
			else{
				$login = $this->dao->compruebaLogin($userN, $passN);
				return $login;
			}
		}
		
		public function comprobarDNI($dni){
			$dni = $_REQUEST['dni'];
			$dniN = htmlspecialchars(trim(strip_tags($dni)));
			$letra = substr($dniN, -1);
			$numeros = substr($dniN, 0, -1);
			if ( substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros%23, 1) == $letra && strlen($letra) == 1 && strlen ($numeros) == 8 ){
				return true;
			}else{
				return false;
			}
		}
		public function nuevoUsuario($user, $pass, $nombre, $apellidos, $dni, $email, $fechaNacimiento, $sexo, $telefono, $direccion, $cp, $avatar, $tipo ){
			//Eliminamos caracteres especiales
			$userN = htmlspecialchars(trim(strip_tags($user)));
			$passN = htmlspecialchars(trim(strip_tags($pass)));
			$nombreN= htmlspecialchars(trim(strip_tags($nombre)));
			$apellidosN = htmlspecialchars(trim(strip_tags($apellidos)));
			$dniN = htmlspecialchars(trim(strip_tags($dni)));
			$emailN = htmlspecialchars(trim(strip_tags($email)));
			$fechaNacimientoN = htmlspecialchars(trim(strip_tags($fechaNacimiento)));
			$sexoN = htmlspecialchars(trim(strip_tags($sexo)));
			$telefonoN = htmlspecialchars(trim(strip_tags($telefono)));
			$direccionN = htmlspecialchars(trim(strip_tags($direccion)));
			$cpN = htmlspecialchars(trim(strip_tags($cp)));
			$avatarN = htmlspecialchars(trim(strip_tags($avatar)));
			
			//No existe el usuario
			if ($this->comprobarDNI($dniN) && strlen($passN)>5){
			  if($this->dao->existeUsuario($dniN, $emailN, $userN) == 0){
					if($avatarN == "img/"){
						$avatarN = "img/UsuarioSF.png";
					}
					$this->dao->insertaUsuario($userN, $passN, $nombreN, $apellidosN, $dniN, $emailN, $fechaNacimientoN, $sexoN, $telefonoN, $direccionN, $cpN, $avatarN, $tipo );
					return true;
				}    
				else{
					return false;
				}
			}
			else{
				return false;
			}
			return $avatarN;
		}
		
		public function existeUser($dni, $user, $email){
			
		}
		public function eliminarUsuario($dni){
			return $this->dao->borraUsuario($dni);
		}
		
		public function getUsuario($dni){
			return ($this->dao->seleccionaUsuario($dni));
		}
		
		public function modificarContra($dni, $pass){
			$this->dao->modificarPass($dni, $pass);
		}
		
		public function modificarPerfilUser($dni, $nombre, $apellidos, $email, $telefono){
			$this->dao->modificarPerfilUser($dni, $nombre, $apellidos, $email, $telefono);
		}
	}
?>