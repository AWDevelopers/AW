<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="estilo.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Contenido</title>
</head>

<body>

<div id="contenedor">

	<?php include 'cabecera.php';?>

	<?php include 'sidebarIzq.php';?>


	<div id="contenido">
			<?php
			if(!empty($_SESSION['login'])){
				if(!$_SESSION['login'])
				{
			   		echo "<p>Inicie sesion para ver el contenido</p>";
			   		echo "<p> <a href='login.php'>Login</a> </p>";
			   	}
			   	else
			   	{
			   		echo "<p>contenido especial para usuarios registrados</p>";
			   	}
			}
			else{
				echo "<p>Inicie sesion para ver el contenido</p>";
			   	echo "<p> <a href='login.php'>Login</a> </p>";
			}
		?>
	</div>

	<?php include 'sidebarDer.php';?>

	<?php include 'pie.php';?>


</div> <!-- Fin del contenedor -->

</body>
</html>
