<?php
sleep(1);
include('config.php');
require_once 'ModelScripts/GestorOngs.php';
    $cif = $_REQUEST['cif'];
    $gestor = new GestorProyectos();
    $gesto->seleccionaOng($cif);
	if(mysqli_num_rows ($rs) > 0)
	{
		 echo '<div id="Error">CIF correcto</div>';
	}
	else{
		echo '<div id="Success">CIF no encontrado</div>';
	}
}
?>