<?php
	
	class ong{

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
		
		/*---------------------- FUNCIONES DE MODIFICACIÓN ------------------------*/

		public function addOng($mysqli){
			$consulta = "INSERT INTO ong(CIF, nombre, direccion, email, usuario, pass, telefono) VALUES ('$this->cif', '$this->nombre', '$this->direccion', '$this->email', '$this->usuario', '$this->pass', '$this->telefono')";
			$resultado=mysqli_query($mysqli,$consulta);
		}

		public function deleteOng($mysqli, $nombre){
			$consulta = "DELETE FROM ong WHERE nombre='$nombre'";
			$resultado = mysqli_query($mysqli, $consulta); 
		}

		public function modifyUsuario($mysqli, $usuario_nuevo, $usuario_actual){
			$consulta = "UPDATE ong SET usuario = '$usuario_nuevo' WHERE usuario = '$usuario_actual'";
			$resultado = mysqli_query($mysqli,$consulta);
			$consulta2 = "UPDATE usuario SET usuario = '$usuario_nuevo' WHERE usuario = '$usuario_actual'";
			$resultado2 = mysqli_query($mysqli,$consulta2);
		}

		public function modifyCif($mysqli, $cif_nuevo, $cif_actual){
			$consulta = "UPDATE ong SET CIF = '$cif_nuevo' WHERE CIF = '$cif_actual'";
			$resultado=mysqli_query($mysqli,$consulta);
		}

		public function modifyDireccion($mysqli, $dir_nueva, $dir_actual){
			$consulta = "UPDATE ong SET direccion = '$dir_nueva' WHERE direccion = '$dir_actual'";
			$resultado=mysqli_query($mysqli,$consulta);
		}

		public function modifyEmail($mysqli, $email_nuevo, $email_actual){
			$consulta = "UPDATE ong SET email = '$email_nuevo' WHERE email = '$email_actual'";
			$resultado=mysqli_query($mysqli,$consulta);
		}

		public function modifyNombre($mysqli, $nombre_nuevo, $nombre_actual){
			$consulta = "UPDATE ong SET nombre = '$nombre_nuevo' WHERE nombre = '$nombre_actual'";
			$resultado=mysqli_query($mysqli,$consulta);
		}

		public function modifyPass($mysqli, $pass_nueva, $pass_actual){
			$consulta = "UPDATE ong SET pass = '$pass_nueva' WHERE pass = '$pass_actual'";
			$resultado=mysqli_query($mysqli,$consulta);
			$consulta2 = "UPDATE usuario SET pass = '$pass_nueva' WHERE pass = '$pass_actual'";
			$resultado2=mysqli_query($mysqli, $consulta2);
		}

		public function modifyTelefono($mysqli, $tlf_nuevo, $tlf_actual){
			$consulta = "UPDATE ong SET telefono = '$tlf_nuevo' WHERE telefono = '$tlf_actual'";
			$resultado=mysqli_query($mysqli,$consulta);
		}

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

	