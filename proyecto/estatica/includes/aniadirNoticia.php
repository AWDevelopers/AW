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
	$result = mysqli_query($connection, $sql); 
   	$numFilas = $result->num_rows;
	if($cuenta == 0){ //No existe ninguna noticia con ese titulo o id y entonces la añadimos
		$nueva_noticia = new noticia($id,$titulo, $tipo, $desCorta, $desLarga, $fecha);
		$nueva_noticia->addNoticia($connection);
		echo 'Se ha añadido la noticia correctamente';
	}
	else{
		echo 'No puede agregar una noticia con un id o titulo existente';
		echo '<a href="vistaAniadirNoticia.php">Pulse aqui para añadirla de nuevo </a>';
	}
	$result->free();
?> 