<?php 
	if (!isset($_SESSION)) { 
		session_start();
	}
	//Connetion
	$hostname = 'localhost';
	$database = 'incommong';
	$username = 'root';
	$password = '';
	$connection = mysqli_connect($hostname, $username, $password, $database);

	//URL Absoluta
	$urlAbsoluta = 'http://localhost/estatica/';
	
	// ¡Oh, no! Existe un error 'connect_errno', fallando así el intento de conexión
	if ($connection->connect_errno) {
		echo "Lo sentimos, este sitio web está experimentando problemas.";
		echo "Error: Fallo al conectarse a MySQL debido a: \n";
		echo "Errno: " . $connection->connect_errno . "\n";
		echo "Error: " . $connection->connect_error . "\n";
		exit;
	}

?>
