<?php

use \AW\proyecto\estatica\includes\Aplicacion as App;
include (RAIZ.RUTA_INC.'config.php');

//$funcion = $_REQUEST['donacion'];

//switch($funcion){
//	case 'Hacer Donación':
		
		$dni = $_POST['dni'];
		$id = $_POST['pid'];
		$dinero = $_POST['cantidad'];


		$app = App::getSingleton();

    	if($app->dniUsuario()!= $dni){
    		//require_once 'ViewScripts/DonacionesVista.php';
			//	$v = new vistaDonaciones();
			//	$v->muestraInsertarDonacion($id, $dinero);
			echo 'El dni introducido no coincide. Intentelo de nuevo..';
			header("Location: ../donaciones.php?id=$id");
    	}else{
    		require_once RAIZ.RUTA_MODEL.'GestorDonaciones.php';
			$donacion = new GestorDonaciones();
			
			$donacion->addDonacion($dni, $id, $dinero);
			
			
			header("Location: "RAIZ.RUTA_APP."procesarDonacion.php");
			exit();
			break;
    	}
		
		
//}

?>