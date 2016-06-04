<?php
	include ("config.php");
	$user=$_POST['usuario'];
	$pass=$_POST['contraseña'];

	//Realizamos la consulta 
	$consulta= "SELECT * FROM usuario WHERE email='$user' || usuario='$user'";
	$resultado=  mysqli_query($connection, $consulta);
	$_SESSION['login']= False;
	if($fila=mysqli_fetch_array($resultado)){
			$passUser = $fila["pass"];
			if($passUser == $pass){
				//Almacenamos el nombre de usuario,tipo, que ha hecho login y todos los datos del usuario
				$_SESSION['usuario']= $fila["usuario"];
				//$_SESSION['tipo']= $fila["tipo"];
				$_SESSION['login']= True;
				$_SESSION['datosUser']=[
					"DNI" => $fila["DNI"],
					"nombre" => $fila["nombre"],
					"apellidos" => $fila["apellidos"],
					"direccion" => $fila["direccion"],
					"cp" => $fila["cp"],
					"usuario" => $fila["usuario"],
					"pass" => $fila["pass"],
					"email" => $fila["email"],
					"fechaNacimiento" => $fila["fechaNacimiento"],
					"avatar" => $fila["avatar"],
					"sexo" => $fila["sexo"],
					"telefono" => $fila["telefono"],
					"tipo" => $fila["tipo"],
				];
			}
	}
	//Liberamos los recursos
	$resultado->free();
	if($_SESSION['login'] == True){
		header("Location: ../index.php"); 
	}
	else{
		header("Location: ../login.php");
	}
	
	
	
?>
