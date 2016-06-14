<!DOCTYPE html>
<html>
<head>
	<title>Pagina con estilos</title>
	
	<link rel="stylesheet" type="text/css" href="css/estilos.css"/>
	<link rel="stylesheet" type="text/css" href="css/colorsandtext.css"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<!--<link rel="stylesheet" type="text/css" href="css/estilos.css"/>-->
</head>
<body>
	<div id='contenedor'>
		<?php 
			require ('common.php');
			require_once('config.php');
			//PAra mostrar los datos de la Ong
			$cif = $_GET['ong'];//_POST["cifOng"];
			$sql = "SELECT * FROM ong WHERE CIF = '$cif'";
			$sql = mysqli_query($connection, $sql);
			$rows = mysqli_fetch_array($sql);
			//Para mostrar la imagen de la Ong
			$sql2 = "SELECT * FROM usuario WHERE DNI = '$cif'";
			$sql2 = mysqli_query($connection, $sql2);
			$row = mysqli_fetch_array($sql2);

		?>
		<div class="contenido">
			<div id="datosOng">
				
				<p><strong>Nombre de la Ong:</strong> <?php echo $rows['nombre']?>  
					<?php 
					if (isset($_SESSION['login']) && $_SESSION['usuario'] == $rows['usuario']){
						echo ' ----- <a href="vistaModificarNombreOng.php?data='. $rows['nombre'] . '">  Modificar </a></p>';
					}
					?>
				
				<p><strong>CIF de la Ong: </strong> <?php echo $rows['CIF']?>
					<?php 
					if (isset($_SESSION['login']) && $_SESSION['usuario'] == $rows['usuario']){
							echo ' ----- <a href="vistaModificarCifOng.php?data='. $rows['CIF'] . '">    Modificar </a></p>';
					}
					?>
				
				<p><strong>Dirección de la Ong: </strong> <?php echo $rows['direccion']?>  
					<?php 
					if (isset($_SESSION['login']) && $_SESSION['usuario'] == $rows['usuario']){
						echo ' ----- <a href="vistaModificarDireccionOng.php?data='. $rows['direccion'] . '">    Modificar </a></p>';
					}
					?>
				<p><strong>Email de la Ong: </strong><?php echo $rows['email']?>
					<?php 
					if (isset($_SESSION['login']) && $_SESSION['usuario'] == $rows['usuario']){
						echo ' ----- <a href="vistaModificarEmailOng.php?data='. $rows['email'] . '">    Modificar </a></p>';
					}
					?>
				<p><strong>Teléfono de la Ong: </strong><?php echo $rows['telefono']?> 
					<?php 
					if (isset($_SESSION['login']) && $_SESSION['usuario'] == $rows['usuario']){
						echo ' ------ <a href="vistaModificarTelefonoOng.php?data='. $rows['telefono'] . '">    Modificar </a></p>';
					}
					?>
				<?php
				if (isset($_SESSION['login']) && $_SESSION['usuario'] == $rows['usuario']){
					echo '<p><strong>Usuario de la Ong: </strong>' . $rows['usuario'] . ' ----- <a href="vistaModificarUsuarioOng.php?data='. $rows['usuario'] . '">    Modificar </a></p> ';
					//<!--<a href="vistaModificarUsuarioOng.php"> Modificar </a></p>-->
				
					echo '<p><strong>Contraseña de la Ong: </strong> ************ ----- <a href="vistaModificarPassOng.php?data='. $rows['CIF'] . '">    Modificar </a></p> ';
				}
				?>

			</div>
			<div id = "imagenOng">
				<?php echo'<p><img src="'. $row['avatar'].'"/></p>';?>
			</div>
			<?php $sql->free(); $sql2->free();?>
		</div>
	</div>
</body>
</html>

