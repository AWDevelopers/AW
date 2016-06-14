<?php
	include ("config.php");
	include ('ong.php');
	
	$usuario_actual = $_POST['usuario_actual'];
	$usuario_nuevo = $_POST['usuario_nuevo'];

	$sql = "SELECT usuario FROM ong WHERE usuario = '$usuario_actual'";
	$sql = mysqli_query($connection, $sql); 

	$result = mysqli_fetch_object($sql);
	if($result == NULL){
		echo 'No se ha podido realizar la modificación.';
		echo '<a href="../vistaModificarUsuarioOng.php">Pulse aqui para modificar de nuevo el usuario de la ONG</a>';
	}else{
		@$ong = new ong();
		$ong->modifyUsuario($connection, $usuario_nuevo, $usuario_actual);
		echo 'Modificación realizada con éxito';
		
		//Para devolver a la pagina de la ONG
		$sql = "SELECT * FROM ong WHERE usuario = '$usuario_nuevo'";
		$sql = mysqli_query($connection, $sql);
		$rows = mysqli_fetch_array($sql);
		$_SESSION['usuario'] = $usuario_nuevo;
		header('Location: ../perfilOng.php?ong='.$rows['CIF']);
	}
	//mysqli_close($connection);
	$sql->free();
?>
