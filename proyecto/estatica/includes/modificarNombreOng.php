<?php
	include ("config.php");
	include ("ong.php");
	
	$nombre_actual = $_POST['nombre_actual'];
	$nombre_nuevo = $_POST['nombre_nuevo'];

	$sql = "SELECT nombre FROM ong WHERE nombre = '$nombre_actual'";
	$sql = mysqli_query($connection, $sql); 

	$result = mysqli_fetch_object($sql);
	if($result == NULL){
		echo 'No se ha podido realizar la modificación.';
		echo '<a href="../vistaModificarNombreOng.php">Pulse aqui para modificar de nuevo el nombre de la ONG</a>';
	}else{
		@$ong = new ong();
		$ong->modifyNombre($connection, $nombre_nuevo, $nombre_actual);
		echo 'Modificación realizada con éxito';
		
		//Para devolver a la pagina de la ONG
		$sql = "SELECT * FROM ong WHERE nombre = '$nombre_nuevo'";
		$sql = mysqli_query($connection, $sql);
		$rows = mysqli_fetch_array($sql);
		header('Location: ../perfilOng.php?ong='. $rows['CIF']);
	}
	//mysqli_close($connection);
	$sql->free();
?>
