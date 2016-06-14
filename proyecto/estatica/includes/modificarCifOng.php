<?php
	include ("config.php");
	include ('ong.php');
	
	$cif_actual = $_POST['cif_actual'];
	$cif_nuevo = $_POST['cif_nuevo'];

	$sql = "SELECT CIF FROM ong WHERE CIF = '$cif_actual'";
	$sql = mysqli_query($connection, $sql); 

	$result = mysqli_fetch_object($sql);
	if($result == NULL){
		echo 'No se ha podido realizar la modificación.';
		echo '<a href="../vistaModificarCifOng.php">Pulse aqui para modificar de nuevo el CIF de la ONG</a>';
	}else{
		@$ong = new ong();
		$ong->modifyCif($connection, $cif_nuevo, $cif_actual);
		echo 'Modificación realizada con éxito';

		//Para devolver a la pagina de la ONG
		$sql = "SELECT * FROM ong WHERE CIF = '$cif_nuevo'";
		$sql = mysqli_query($connection, $sql);
		$rows = mysqli_fetch_array($sql);
		header('Location: ../perfilOng.php?ong='.$rows['CIF']);
	}
	//mysqli_close($connection);
	$sql->free();
?>
