<?php 
	ini_set('default_charset', 'UTF-8');
	setLocale(LC_ALL, 'es_ES.UTF.8');
	
	if (!isset($_SESSION)) { 
		session_start();
	}

	//LA VARIABLE MAS IMPORTANTE: REDEFINIR SI COLOCAIS LA CARPETA EN OTRO LADO QUE NO SEA HTDOCS
	define('RAIZ_APP', 'http://localhost/estatica');
	//rutas que se usan siempre
	define('HOME', RAIZ_APP.'/index.php');
	define('VOLUNTARIOS', RAIZ_APP.'/voluntariosONGUs.php');
	define('PROYECTOS', RAIZ_APP.'/vistaProyectoDonar.php');
	define('TIENDA', RAIZ_APP.'/tienda.php');
	define('LOGIN', RAIZ_APP.'/login.php');
	define('LOGOUT', RAIZ_APP.'/includes/logout.php');
	define('CONOCENOS', RAIZ_APP.'/conocenos.php');
	define('REGISTRO', RAIZ_APP.'/registrate.php');
	
	//carpetas
	define('IMAGENES', RAIZ_APP.'/img');
	define('VIDEO', RAIZ_APP.'/videos');
	define('INCLUDE', RAIZ_APP.'/include');
	define('SCRIPTVISTAS', RAIZ_APP.'/ViewScripts');
	define('SCRIPTMODELO', RAIZ_APP.'/ModelScripts');
	define('SCRIPTDAO', RAIZ_APP.'/DaoScripts');

	 /*Create connection*/
	function createConnection(){
		$hostname="localhost";
		$username="root";
		$database="incommong";
		$mysqli = new mysqli($hostname, $username, "", $database);
		if (mysqli_connect_errno() ) {
		 echo "Error de conexión a la BD: ".mysqli_connect_error();
		 exit();
		}
		return $mysqli;
	}
	 function closeConnection($mysqli){
			$mysqli->close();
	 }
?>
