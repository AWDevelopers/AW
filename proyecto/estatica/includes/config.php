<?php if (!isset($_SESSION)) { session_start();}
	//Connetion
	$hostname = 'localhost';
	$database = 'incommong';
	$username = 'root';
	$password = '';
	$connection = mysqli_connect($hostname, $username, $password, $database);

	//URL Absoluta
	$urlAbsoluta = 'http://localhost/estatica/';

?>
