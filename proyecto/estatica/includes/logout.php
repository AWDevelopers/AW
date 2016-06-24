<?php
	require_once RAIZ.RUTA_INC.'config.php';
	use \AW\proyecto\estatica\includes\Aplicacion as App;
	$app = App::getSingleton();
	$app->logout();
	header("Location: "RAIZ.RUTA_APP."index.php");
?>