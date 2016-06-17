<?php
	
	class Ong{

		private $cif;
		private $nombre;
		private $direccion;
		private $email;
		private $usuario;
		private $pass;
		private $telefono;

		/*---------------- CONSTRUCTORA ---------------------------------*/

		function __construct($cif, $nombre, $direccion, $email, $usuario, $pass, $telefono){
			$this->cif = $cif;
			$this->nombre = $nombre;
			$this->direccion = $direccion;
			$this->email = $email;
			$this->usuario = $usuario;
			$this->pass = $pass;
			$this->telefono = $telefono;
		}

		/*----------------- MÉTODOS GET --------------------*/

		public function getCif(){ return $this->cif; }		
		
		public function getNombre(){ return $this->nombre;}
		
		public function getDireccion(){ return $this->direccion; }
		
		public function getEmail(){ return $this->email; }
		
		public function getUsuario(){ return $this->usuario; }
		
		public function getPass(){ return $this->pass; }
		
		public function getTelefono(){ return $this->telefono; }
		
		
		/*---------------------- MOSTRAR Y CARGAR DATOS -------------------------------*/

		public function mostrarDatosOng($mysqli, $nombreong){
			$consulta = "SELECT nombre, direccion, email, telefono FROM ong WHERE nombre = '$nombreong'";
			$resultado = mysqli_query($mysqli,$consulta);
			return $resultado;
		}

		public function cargarDatosOng($cif){
			include 'includes/config.php';

			$sql = "SELECT * FROM ong WHERE CIF = '$cif'";
			$consulta = $connection->query($sql);

			if(!$consulta|| $consulta->num_rows === 0){
				echo "Se ha producido un error con ongs, inténtalo más tarde.";
				exit;
			}
			$datos = $consultaP->fetch_assoc();
			
			$this->cif = $datos['CIF'];
			$this->nombre = $datos['nombre'];
			$this->direccion = $datos['direccion'];
			$this->email = $datos['email'];
			$this->usuario = $datos['usuario'];
			$this->pass = $datos['pass'];
			$this->telefono = $datos['telefono'];
		}
	}
?>

	
