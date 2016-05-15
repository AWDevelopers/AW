<? php

//Defines con los parámetros de configuración de acceso a la BBDD y la URL desde la que se sirve la aplicación
	define('BD_HOST', 'localhost');
	define('BD_NAME', 'incommong');
	define('BD_USER', 'incommong');
	define('BD_PASS', 'incommong');
	define('RAIZ_APP', __DIR__);
	define('RUTA_APP', '/incommong/');
	define('RUTA_IMGS', RUTA_APP.'img/');
	define('RUTA_CSS', RUTA_APP.'css/');
	define('RUTA_JS', RUTA_APP.'js/');
	define('INSTALADA', true );

	if (! INSTALADA) {
	  echo "La aplicación no está configurada";
	  exit();
	}

	ini_set('default_charset', 'UTF-8');
	setLocale(LC_ALL, 'es_ES.UTF.8');
	
	session_start();
	$user=$_POST['usuario'];
	$pass=$_POST['contraseña'];
	$mysqli = new mysqli('localhost', 'root', '', 'incommong');
	
	// ¡Oh, no! Existe un error 'connect_errno', fallando así el intento de conexión
	if ($mysqli->connect_errno) {
		echo "Lo sentimos, este sitio web está experimentando problemas.";
		echo "Error: Fallo al conectarse a MySQL debido a: \n";
		echo "Errno: " . $mysqli->connect_errno . "\n";
		echo "Error: " . $mysqli->connect_error . "\n";
		exit;
	}

//Función para autocargar clases PHP.
/*spl_autoload_register(function ($class) {

    $prefix = 'aw\\';		// project-specific namespace prefix

    $base_dir = __DIR__ . '/';		// base directory for the namespace prefix

    $len = strlen($prefix);			// does the class use the namespace prefix?
    if (strncmp($prefix, $class, $len) !== 0) {
        return;// no, move to the next registered autoloader
    }

    $relative_class = substr($class, $len);// get the relative class name

    // replace the namespace prefix with the base directory, replace namespace
    // separators with directory separators in the relative class name, append
    // with .php
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';
    // if the file exists, require it
    if (file_exists($file)) {
        require $file;
    }
});

	$dbhost = 'localhost';
	$dbname = 'inCommONG';
	$dbuser = 'inCommONGuser';
	$dbpass = 'inCommONGpass';
	$dbconx = 0;

	function conectaBD(){
		global $dbhost,$dbname,$dbuser,$dbpass;
		$dbconx = mysql_pconnect($dbhost, $dbuser, $dbpass) or
       				die("No se puede conectar con la BD: " . mysql_error($dbconx));
   		mysql_select_db($dbname,$dbconx);
   		return $dbconx;

		/*$dbcon = new mysqli($dbhost, $dbuser, $dbpass);
		if($conn->connect_error){
   			die("Conexión fallida: " . $conn->connect_error);
		}
		echo "Conexión correcta";
	}

	function desconectaDB($db){
 		global $dbconx;
		if(isset($db)) {
			mysql_close($db);
		}
		else if (isset($dbconx)){
			mysql_close($dbconx);
		}
	}*/

?>
