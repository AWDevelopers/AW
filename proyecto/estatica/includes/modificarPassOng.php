<?php
	include ("config.php");
	include ('ong.php');
	
	$pass_actual = $_POST['pass_actual'];
	$pass_nuevo = $_POST['pass_nuevo'];
	$pass_nuevo2 = $_POST['pass_nuevo_dos'];

	if($pass_nuevo == $pass_nuevo2){
		$sql = "SELECT pass FROM ong WHERE pass = '$pass_actual'";
		$sql = mysqli_query($connection, $sql);

		$result = mysqli_fetch_object($sql);
		if($result == NULL){
			echo 'La contraseña introducida no es correcta.';
			echo '<a href="../vistaModificarPassOng.php">Pulse aqui para modificar de nuevo la pass de la ONG</a>';
		}else{
			@$ong = new ong();
			$ong->modifyPass($connection, $pass_nuevo, $pass_actual);
			echo 'Modificación realizada con éxito';

			//Para devolver a la pagina de la ONG
			$sql = "SELECT * FROM ong WHERE pass = '$pass_nuevo'";
			$sql = mysqli_query($connection, $sql);
			$rows = mysqli_fetch_array($sql);
			header('Location: ../perfilOng.php?ong='.$rows['CIF']);
		}
		//mysqli_close($connection);
	}else{
		echo 'Las contraseñas no coinciden';
		echo '<a href="../vistaModificarPassOng.php">Pulse aqui para modificar de nuevo la pass de la ONG</a>';
	}
	
	$sql->free();
?>

