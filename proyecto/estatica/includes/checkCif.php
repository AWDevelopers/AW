<?php
sleep(1);
include('config.php');
use \AW\proyecto\estatica\includes\Aplicacion as App;
if($_REQUEST) {
    $cif = $_REQUEST['cif'];
    $app = App::getSingleton();
    $con = $app->conexionBd();
	$sql = "SELECT * FROM ong where CIF='$cif'";
	$rs = $con->query($sql) or die ($con->error);
	if(mysqli_num_rows ($rs) > 0)
	{
		 echo '<div id="Error">CIF correcto</div>';
	}
	else{
		echo '<div id="Success">CIF no encontrado</div>';
	}
}
?>