<?php
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
                
                public getNombre(){
                    return $this->nombre;
                }
                
                public getDNI(){
                    return $this->DNI;
                }
                
                public getApellidos(){
                    return $this->apellidos;
                }
                
                public getCP(){
                    return $this->cp;
                }
                
                public getUsuario(){
                    return $this->usuario;
                }
                
                public getPass(){
                    return $this->pass;
                }
                
                public getEmail(){
                    return $this->email;
                }
                
                public getFechaNacimiento(){
                    return $this->fechaNacimiento;
                }
                
                public getAvatar(){
                    return $this->avatar;
                }
                
                public getSexo(){
                    return $this->sexo;
                }
                
                public getTelefono(){
                    return $this->telefono;
                }
                
                public getDireccion(){
                    return $this->direccion;
                }
                
                public function compruebaPassword($password) {
                    return password_verify($password, $this->pass);
                }
		
		
	}
?>