<?php
	include ("config.php");
	include ('noticia.php');
	//Obtenemos los valores del formulario
	$id=$_POST['id'];
	$titulo=$_POST['titulo'];
	$tipo=$_POST['tipo'];
	$desCorta=$_POST['desCorta'];
	$desLarga=$_POST['desLarga'];
	$fecha=$_POST['fecha'];


	$sql = "SELECT id FROM noticia WHERE id='$id' || titulo='$titulo'";
	$sql = mysqli_query($connection, $sql); 
   
   $result = mysqli_fetch_object($sql);
	if($result == NULL){ //No existe ninguna noticia con ese titulo o id y entonces la añadimos
		$nueva_noticia = new noticia($id,$titulo, $tipo, $desCorta, $desLarga, $fecha);
		$nueva_noticia->addNoticia($connection);
		echo 'Se ha añadido la noticia correctamente';
	}
	else{
		echo 'No puede agregar una noticia con un id o titulo existente';
		echo '<a href="vistaAniadirNoticia.php">Pulse aqui para añadirla de nuevo </a>';
	}
?> 