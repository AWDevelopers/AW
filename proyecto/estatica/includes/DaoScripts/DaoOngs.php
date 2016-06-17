<?php
	
	require_once '/../ModelScripts/Ongs.php';
	require_once '/../includes/config.php';

	class DaoOngs{

		private $array;

		public function listaOngs(){
			$array = new ArrayObject();
			$con = createConnection();
			$consulta = "SELECT * FROM ongs";
			$resultado = $con->query($consulta) or die ($con->error);

			if($resultado != NULL){
				while($lista = $resultado->fetch_assoc()){
					$array->append(new Ongs($lista['CIF'], $lista['nombre'], $lista['direccion'], $lista['email'], $lista['usuario'], $lista['pass'], $lista['telefono']));
				}
				mysqli_free_result($resultado);
				closeConnection($con);
				return $array;
			}
		}

		public function addOng($ong){
			$con = createConnection();
			$consulta = "INSERT INTO ong(CIF, nombre, direccion, email, usuario, pass, telefono) VALUES ";
			$consulta .= "('" . $ong->getCif() . "', '" . $ong->getNombre() . "', '" . $ong->getDireccion() . "', '" . $ong->getEmail() . "', '" . $ong->getUsuario() . "', '" . $ong->getPass() . "', '" . $ong->getTelefono() . "')";
			$con->query($consulta) or die ($con->error);
			closeConnection($con);
		}

		public function deleteOng($cif){
			$con = createConnection();
			$consulta = "DELETE FROM ong WHERE CIF='$cif'";
			$con->query($consulta) or die ($con->error);
			closeConnection($con);
		}

		public function modifyUsuario($usuario_nuevo, $usuario_actual){
			$con = createConnection();
			$consulta = "UPDATE ong SET usuario = '$usuario_nuevo' WHERE usuario = '$usuario_actual'";
			$con->query($consulta) or die ($con->error);
			$consulta2 = "UPDATE usuario SET usuario = '$usuario_nuevo' WHERE usuario = '$usuario_actual'";
			$con->query($consulta2) or die ($con->error);
			closeConnection($con);
		}

		public function modifyCif($cif_nuevo, $cif_actual){
			$con = createConnection();
			$consulta = "UPDATE ong SET CIF = '$cif_nuevo' WHERE CIF = '$cif_actual'";
			$con->query($consulta) or die ($con->error);
			closeConnection($con);
		}

		public function modifyDireccion($dir_nueva, $dir_actual){
			$con = createConnection();
			$consulta = "UPDATE ong SET direccion = '$dir_nueva' WHERE direccion = '$dir_actual'";
			$con->query($consulta) or die($con->error);
			closeConnection($con);
		}

		public function modifyEmail($email_nuevo, $email_actual){
			$con = createConnection();
			$consulta = "UPDATE ong SET email = '$email_nuevo' WHERE email = '$email_actual'";
			$con->query($consulta) or die($con->error);
			closeConnection($con);
		}

		public function modifyNombre($nombre_nuevo, $nombre_actual){
			$con = createConnection();
			$consulta = "UPDATE ong SET nombre = '$nombre_nuevo' WHERE nombre = '$nombre_actual'";
			$con->query($consulta) or die($con->error);
			closeConnection($con);
		}

		public function modifyPass($pass_nueva, $pass_actual){
			$con = createConnection();
			$consulta = "UPDATE ong SET pass = '$pass_nueva' WHERE pass = '$pass_actual'";
			$con->query($consulta) or die($con->error);
			$consulta2 = "UPDATE usuario SET pass = '$pass_nueva' WHERE pass = '$pass_actual'";
			$con->query($consulta2) or die($con->error);
			closeConnection($con);
		}

		public function modifyTelefono($tlf_nuevo, $tlf_actual){
			$con = createConnection();
			$consulta = "UPDATE ong SET telefono = '$tlf_nuevo' WHERE telefono = '$tlf_actual'";
			$con->query($consulta) or die($con->error);
			closeConnection($con);
		}

		public function seleccionaOng($cif){
			$consulta = "SELECT nombre, direccion, email, telefono FROM ong WHERE CIF = '$cif'";
			$resultado = mysqli_query($mysqli,$consulta);
			return $resultado;
		}

		
	}
?>