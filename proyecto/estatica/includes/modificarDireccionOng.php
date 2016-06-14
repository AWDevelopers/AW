<?php
	include ("config.php");
	include ('ong.php');
	
	$dir_actual = $_POST['dir_actual'];
	$dir_nuevo = $_POST['dir_nuevo'];

	$sql = "SELECT direccion FROM ong WHERE direccion = '$dir_actual'";
	$sql = mysqli_query($connection, $sql); 

	$result = mysqli_fetch_object($sql);
	if($result == NULL){
		echo 'No se ha podido realizar la modificación.';
		echo '<a href="../vistaModificarDireccionOng.php">Pulse aqui para modificar de nuevo la dirección de la ONG</a>';
	}else{
		@$ong = new ong();
		$ong->modifyDireccion($connection, $dir_nuevo, $dir_actual);
		echo 'Modificación realizada con éxito';

		//Para devolver a la pagina de la ONG
		$sql = "SELECT * FROM ong WHERE direccion = '$dir_nuevo'";
		$sql = mysqli_query($connection, $sql);
		$rows = mysqli_fetch_array($sql);
		header('Location: ../perfilOng.php?ong='.$rows['CIF']);
	}
	//mysqli_close($connection);
	$sql->free();
?>
