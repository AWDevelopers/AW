<?php
	require_once '/../ModelScripts/usuario.php';
	require_once '/../config.php';
	use \AW\proyecto\estatica\includes\Aplicacion as App;
	class DaoUsuario{

		private $array;

		function listaUsuarios(){
			$app = App::getSingleton();
                        $con = $app->conexionBd();
			$sql = "SELECT * FROM proyecto";
			$rs = $con->query($sql) or die ($con->error);
			if($rs != NULL)
			{
				while($lista[] = $rs->fetch_assoc());
				$rs->free();
				$con->close();
				return ($lista);
			}
		}

		function insertaUsuario($dni, $nombre, $apellidos, $cp, $user, $pass, $email, $fechaNacimiento, $avatar, $sexo, $telefono, $resultado, $direccion)){
			$app = App::getSingleton();
                        $con = $app->conexionBd();
			$sql = "INSERT INTO proyecto(DNI, nombre, apellidos, direccion, cp, usuario, pass, email, fechaNacimiento, avatar, sexo, telefono ) VALUES ";
			$sql.= "('".$dni."', '".$nombre."' , '".$apellidos."', '".$direccion."', '".$usuario."', '".$pass."', '".$email."', '".$avatar."', '".$sexo."', '".$telefono."')";
			$con->query($sql) or die ($con->error);
			$num = $con->insert_id;
			$con->close();
			return ($num);
		}

		function borraUsuario($DNI){
			$app = App::getSingleton();
                        $con = $app->conexionBd();
			$sql = "DELETE FROM proyecto WHERE DNI = '$DNI'";
			$con->query($sql) or die ($con->error);
			$con->close();
		}

		function seleccionaUsuario($DNI){
			$app = App::getSingleton();
                        $con = $app->conexionBd();
			$sql = "SELECT * FROM proyecto WHERE DNI = '$DNI'";
			$rs = $con->query($sql) or die ($con->error);
			$resultado = "";
			if($rs != NULL)
			{
				while($lista = $rs->fetch_assoc()){
					//$resultado =  new Proyectos($lista['idProyecto'], $lista['CIFOng'], $lista['fechaCreacion'], $lista['dineroNecesario'], $lista['dineroAcumulado'], $lista['nombre'], $lista['descripcionCorta'], $lista['descripcionLarga'], $lista['imagen'], $lista['numVoluntarios']);
				}
				$rs->free();
				$con->close();
				return ($resultado);
			}
		}


	}

?>