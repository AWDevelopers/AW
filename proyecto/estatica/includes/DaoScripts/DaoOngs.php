<?php
	
	require_once '/../ModelScripts/ong.php';
	require_once '/../config.php';
	use \AW\proyecto\estatica\includes\Aplicacion as App;

	class DaoOngs{

		private $array;

		public function listaOngs(){
			$array = new ArrayObject();
			$app = App::getSingleton();
    		$con = $app->conexionBd();

			$consulta = "SELECT * FROM ongs";
			$resultado = $rs = $con->query($consulta) or die ($con->error);

			if($resultado != NULL){
				while($lista = $resultado->fetch_assoc()){
					$array->append(new Ongs($lista['CIF'], $lista['nombre'], $lista['direccion'], $lista['email'], $lista['usuario'], $lista['pass'], $lista['telefono'], $lista['imagen']));
				}
				mysqli_free_result($resultado);
				$rs->free();
				return $array;
			}
		}

		public function addOng($ong){
			$app = App::getSingleton();
    		$con = $app->conexionBd();
			$consulta = "INSERT INTO ong(CIF, nombre, direccion, email, usuario, pass, telefono) VALUES ";
			$consulta .= "('" . $ong->getCif() . "', '" . $ong->getNombre() . "', '" . $ong->getDireccion() . "', '" . $ong->getEmail() . "', '" . $ong->getUsuario() . "', '" . $ong->getPass() . "', '" . $ong->getTelefono() . "')";
			//$rs = $con->query($consulta) or die ($con->error);
			$con->query($consulta) or die ($con->error);
			//$rs->free()
		}

		public function deleteOng($cif){
			$app = App::getSingleton();
    		$con = $app->conexionBd();
			$consulta = "DELETE FROM ong WHERE CIF='$cif'";
			//$rs = $con->query($consulta) or die ($con->error);
			$con->query($consulta) or die ($con->error);
			//$rs->free();
		}

		public function modifyUsuario($usuario_nuevo, $usuario_actual){
			$app = App::getSingleton();
    		$con = $app->conexionBd();
			$sql = "UPDATE ong SET usuario = '$usuario_nuevo' WHERE usuario = '$usuario_actual'";
			$con->query($sql) or die ($con->error);

		}

		public function modifyCif($cif_nuevo, $cif_actual){
			$app = App::getSingleton();
    		$con = $app->conexionBd();
			$sql = "UPDATE ong SET CIF = '$cif_nuevo' WHERE CIF = '$cif_actual'";
			$con->query($sql) or die ($con->error);
		}

		public function modifyDireccion($dir_nueva, $dir_actual){
			$app = App::getSingleton();
    		$con = $app->conexionBd();
			$sql = "UPDATE ong SET direccion = '$dir_nueva' WHERE direccion = '$dir_actual'";
			$con->query($sql) or die ($con->error);
		}

		public function modifyEmail($email_nuevo, $email_actual){
			$app = App::getSingleton();
    		$con = $app->conexionBd();
			$sql = "UPDATE ong SET email = '$email_nuevo' WHERE email = '$email_actual'";
			$con->query($sql) or die ($con->error);
		}
		public function modifyNombre($nombre_nuevo, $nombre_actual){
			$app = App::getSingleton();
    		$con = $app->conexionBd();
			$sql =  "UPDATE ong SET nombre = '$nombre_nuevo' WHERE nombre = '$nombre_actual'";
			$con->query($sql) or die ($con->error);
		}

		public function modifyPass($pass_nueva, $pass_actual){
			$app = App::getSingleton();
    		$con = $app->conexionBd();
			$sql = "UPDATE ong SET pass = '$pass_nueva' WHERE pass = '$pass_actual'";
			$con->query($sql) or die ($con->error);
		}

		public function modifyTelefono($tlf_nuevo, $tlf_actual){
			$app = App::getSingleton();
    		$con = $app->conexionBd();
			$sql = "UPDATE ong SET telefono = '$tlf_nuevo' WHERE telefono = '$tlf_actual'";
			$con->query($sql) or die ($con->error);
		}

		public function seleccionaOng($cif){
			$app = App::getSingleton();
    		$con = $app->conexionBd();
			$sql = "SELECT * FROM ong WHERE CIF = '$cif'";
			$rs = $con->query($sql) or die($con->error);
			$resultado = "";
			if($rs!= NULL){
				while($lista = $rs->fetch_assoc()){
					$resultado =  new ong($lista['CIF'], $lista['nombre'], $lista['direccion'], $lista['email'], $lista['usuario'], $lista['pass'], $lista['telefono'], $lista['imagen']);
					$rs->free();
					
				}
			}
			return $resultado;

			
		}

		
	}
?>