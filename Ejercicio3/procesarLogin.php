<?php
	$usuario = $_POST["username"];   
	$password = $_POST["password"];
	session_start();  
	 if($usuario == "user")
	 {
	 	if($password == "userpass"){
		  //Creamos sesión
		  //Almacenamos el nombre de usuario en una variable de sesión usuario
		  $_SESSION['usuario'] = $usuario; 
		  $_SESSION['login'] = true;  
		  $_SESSION['nombre'] = "Juan";     
		}
	 }
	 else if($usuario == "admin")
	 {
	 	if($password == "adminpass"){
		  $_SESSION['login'] = true;  
		  $_SESSION['nombre'] = "Administrador";  
		  $_SESSION['esAdmin'] = true;   
		  //Almacenamos el nombre de usuario en una variable de sesión usuario
		  $_SESSION['usuario'] = $usuario;   
		}
	 }
	 else
	 {
	 	$_SESSION['login'] = false;     
	 }
	 if($_SESSION['login'] == true)
	 {
	 	header("Location: index.php"); 
	 }
	 else
	 {
	 	header("Location: login.php"); 
	 }
?>