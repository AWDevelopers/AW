<?php
	include ("config.php");
	include ('ong.php');
	
	$email_actual = $_POST['email_actual'];
	$email_nuevo = $_POST['email_nuevo'];

	$sql = "SELECT email FROM ong WHERE email = '$email_actual'";
	$sql = mysqli_query($connection, $sql); 

	$result = mysqli_fetch_object($sql);
	if($result == NULL){
		echo 'No se ha podido realizar la modificación.';
		echo '<a href="../vistaModificarEmailOng.php">Pulse aqui para modificar de nuevo el email de la ONG</a>';
	}else{
		@$ong = new ong();
		$ong->modifyEmail($connection, $email_nuevo, $email_actual);
		echo 'Modificación realizada con éxito';

		//Para devolver a la pagina de la ONG
		$sql = "SELECT * FROM ong WHERE email = '$email_nuevo'";
		$sql = mysqli_query($connection, $sql);
		$rows = mysqli_fetch_array($sql);
		header('Location: ../perfilOng.php?ong='.$rows['CIF']);
	}
	//mysqli_close($connection);
	$sql->free();
?>
