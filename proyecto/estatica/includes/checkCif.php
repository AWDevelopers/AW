<?php
sleep(1);
include('config.php');
if($_REQUEST) {
    $cif = $_REQUEST['cif'];
    $con = createConnection();
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