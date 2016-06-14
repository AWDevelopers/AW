<?php
	include ("config.php");
	include ('ong.php');
	
	$telefono_actual = $_POST['tlf_actual'];
	$telefono_nuevo = $_POST['tlf_nuevo'];

	$sql = "SELECT telefono FROM ong WHERE telefono = '$telefono_actual'";
	$sql = mysqli_query($connection, $sql); 

	$result = mysqli_fetch_object($sql);
	if($result == NULL){
		echo 'No se ha podido realizar la modificación.';
		echo '<a href="../vistaModificarTelefonoOng.php">Pulse aqui para modificar de nuevo el telefono de la ONG</a>';
	}else{
		@$ong = new ong();
		$ong->modifyTelefono($connection, $telefono_nuevo, $telefono_actual);
		echo 'Modificación realizada con éxito';
		
		//Para devolver a la pagina de la ONG
		$sql = "SELECT * FROM ong WHERE telefono = '$telefono_nuevo'";
		$sql = mysqli_query($connection, $sql);
		$rows = mysqli_fetch_array($sql);
		header('Location: ../perfilOng.php?ong='. $rows['CIF']);
	}
	//mysqli_close($connection);
	$sql->free();
?>
