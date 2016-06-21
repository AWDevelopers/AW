<?php
	//require_once '/../ModelScripts/usuario.php';
	require_once '/../config.php';
	use \AW\proyecto\estatica\includes\Aplicacion as App;
	class DaoUsuarios{

		private $array;

		function listaUsuarios(){
			$app = App::getSingleton();
                        $con = $app->conexionBd();
			$sql = "SELECT * FROM usuario";
			$rs = $con->query($sql) or die ($con->error);
			if($rs != NULL)
			{
				while($lista[] = $rs->fetch_assoc());
				$rs->free();
				$con->close();
				return ($lista);
			}
		}

		function usuarioCorrecto($userName){
			$app = App::getSingleton();
            $con = $app->conexionBd();
			$sql = sprintf("SELECT * FROM usuario WHERE usuario='%s' OR email='%s'", $con->real_escape_string($userName), $con->real_escape_string($userName));
		
			$rs = $con->query($sql) or die ($con->error);
			if($rs != NULL){
				return $rs->num_rows;
			}
		}
		
		function existeUsuario($dni, $email, $user){
			$app = App::getSingleton();
            $con = $app->conexionBd();
			$numCol=0;
			$sql = sprintf("SELECT * FROM usuario WHERE usuario='%s' OR email='%s' OR DNI='%s'", $con->real_escape_string($user), $con->real_escape_string($email), $con->real_escape_string($dni));
			$rs = $con->query($sql) or die ($con->error);
			if($rs!= NULL){
				$numCol = $rs->num_rows;
			}
			//$con->close();
			return $numCol;
		}
		
		function compruebaLogin($user, $pass){
			$app = App::getSingleton();
            $con = $app->conexionBd();
			$sql = sprintf("SELECT * FROM usuario WHERE usuario='%s' OR email='%s'", $con->real_escape_string($user), $con->real_escape_string($user));
			$rs = $con->query($sql) or die ($con->error);
			$login =false;
			if($row = $rs->fetch_assoc()){    
					//Si el usuario es correcto ahora validamos su contraseña
					$passBd = $row["pass"];
					if ($pass == $passBd) {
						  //Creamos la sesión
							session_destroy();
							session_start();  
						  //Almacenamos los datos del usuario en variables
							$_SESSION['user'] = $row["usuario"];
							$_SESSION['Logueado'] = true;
							$_SESSION['rol'] = $row["tipo"];
							$_SESSION['Nombre'] = $row["nombre"];
							$_SESSION['Apellidos'] = $row["apellidos"];
							$_SESSION['Email'] = $row["email"];
							$_SESSION['Direccion'] = $row["direccion"];
							$_SESSION['CP'] = $row["cp"];
							$_SESSION['sexo'] = $row["sexo"];
							$_SESSION['telefono'] = $row["telefono"];
							$_SESSION['avatar'] = $row["avatar"];
							$_SESSION['DNI'] = $row["DNI"];
							$login=true;
					}
					else
						 {				 	
							$login=false;
						}
				}
				else
				{
					$login=false;
				}
			$con->close();
			return $login;
		}
		
		function insertaUsuario($user, $pass, $nombre, $apellidos, $dni, $email, $fechaNacimiento, $sexo, $telefono, $direccion, $cp, $avatar ){
			$app = App::getSingleton();
            $con = $app->conexionBd();
			$tipo = "User";
			$sql = "INSERT INTO usuario (`DNI`, `nombre`, `apellidos`, `direccion`, `cp`, `usuario`, `pass`, `email`, `fechaNacimiento`, `avatar`, `sexo`, `telefono`, `tipo`)
			VALUES ('$dni', '$nombre', '$apellidos', '$direccion', '$cp','$user', '$pass', '$email', '$fechaNacimiento', '$avatar','$sexo', '$telefono', '')";
			$rs = $con->query($sql) or die ($con->error);
			if($rs != NULL){
				//
			}
			$con->close();

		}

		function borraUsuario($DNI){
			$app = App::getSingleton();
			$con = $app->conexionBd();
            $sql = "DELETE FROM usuario WHERE DNI = '$DNI'";
			$con->query($sql) or die ($con->error);
			$con->close();
		}

		function seleccionaUsuario($DNI){
			$app = App::getSingleton();
            $con = $app->conexionBd();
			$sql = "SELECT * FROM usuario WHERE DNI = '$DNI'";
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