<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="estilo.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Administracion</title>
</head>

<body>

<div id="contenedor">

	<?php include 'cabecera.php';?>

	<?php include 'sidebarIzq.php';?>


	<div id="contenido">
			<?php
			if(!empty($_SESSION['esAdmin'])){
				if(!$_SESSION['esAdmin'])
				{
			   		echo "<p>ACCESO DENEGADO</p>";
			   	}
			   	else
			   	{
			   		echo "Panel de administracion";
			   	}
			}
			else{
				echo "<p>ACCESO DENEGADO</p>";
			}
		?>
	</div>

	<?php include 'sidebarDer.php';?>

	<?php include 'pie.php';?>


</div> <!-- Fin del contenedor -->

</body>
</html>