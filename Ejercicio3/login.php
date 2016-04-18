<!DOCTYPE html>
	<html>
		<head>
			<link rel="stylesheet" type="text/css" href="estilo.css" />
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
			<title>Login</title>
		</head>
		<body>
			<div id="contenedor">

				<?php include 'cabecera.php';?>

				<?php include 'sidebarIzq.php';?>


				<div id="contenido">
					<form action="procesarLogin.php" method="post">
					    User Name:<br>
					    <input type="text" name="username"><br><br>
					    Password:<br>
					    <input type="password" name="password"><br><br>
					    <input type="submit" name="submit" value="Login">
					</form>
					<?php
						if(isset($_SESSION['login']))
						{
			   				echo "<p>Usuario desconocido.</p>";
						}
					?>
				</div>

				<?php include 'sidebarDer.php';?>

				<?php include 'pie.php';?>


</div> <!-- Fin del contenedor -->
		</body>
	</html>
