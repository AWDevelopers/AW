<?php

/**
	* 
	*/
	class Usuario
	{	
		private $nombre;
		private $DNI; 
   		private $apellidos; 
		private $cp; 
		private $usuario;
		private $pass;
		private $email;
		private $fechaNacimiento;
		private $avatar;
		private $sexo;
		private $telefono;
		private $resultado;
		private $direccion;

		/*Constructora de la clase por defecto*/
		function __construct($nombre,$dni,$apellidos,$direccion,$cp,$usuario,$pass,$email,$fecha,$avatar,$sexo,$telefono){
			$this->nombre=$nombre;
			$this->DNI=$dni;  
	   		$this->apellidos=$apellidos; 
			$this->cp=$cp; 
			$this->usuario=$usuario;
			$this->pass=$pass;
			$this->email=$email;
			$this->fechaNacimiento=$fecha;
			$this->avatar=$avatar;
			$this->sexo=$sexo;
			$this->telefono=$telefono;
			$this->direccion=$direccion;
		}
<<<<<<< HEAD
=======
		
>>>>>>> 05110b3d9d6baff37064d19c2e8bbbe493673d0e
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
		/*Función que añade un usuario a la BD */
		public function addUser($mysqli){
			$consulta="INSERT INTO usuario (DNI,nombre,apellidos,direccion,cp,usuario,pass,email,fechaNacimiento,avatar,sexo,telefono) VALUES ('$this->DNI','$this->nombre','$this->apellidos','$this->direccion','$this->cp','$this->usuario','$this->pass','$this->email','$this->fechaNacimiento','$this->avatar','$this->sexo','$this->telefono');";
			$resultado=mysqli_query($mysqli,$consulta);
			$resultado->free();
		}

		/*Función que añade un usuario a la BD */
		/*public function addUser($mysqli){
			$consulta="INSERT INTO usuario (DNI,nombre,apellidos,direccion,cp,usuario,pass,email,fechaNacimiento,avatar,sexo,telefono) VALUES ('$this->DNI','$this->nombre','$this->apellidos','$this->direccion','$this->cp','$this->usuario','$this->pass','$this->email','$this->fechaNacimiento','$this->avatar','$this->sexo','$this->telefono');";
			$resultado=mysqli_query($mysqli,$consulta);
		}*/
		/*Función que elimina un usuario de la BD 
		public function delUser(){
			$consulta="delete from Usuario where email = $email";
			$resultado=mysqli_query($consulta);
		}*/
		/*Función que modifica un usuario 
		public function modUser($campo,$valor){
			UPDATE Usuario SET ;
		}*/
	}
?>
