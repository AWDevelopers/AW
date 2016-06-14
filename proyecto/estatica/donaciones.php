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
			$proyecto = $_POST["nombreProyecto"];
			$sql = "SELECT * FROM proyecto WHERE idProyecto = '$proyecto'";
			$sql = mysqli_query($connection, $sql);
			$rows = mysqli_fetch_array($sql);

		?>
		<div class="contenido">
			<div id = 'fundacion'>
				<!--<h1 align="center"><a href="perfilOng.php"><?php $proyecto?></a></h1>-->
				<?php echo '<h1 align="center"><a href="perfilOng.php?ong=' . $rows['CIFOng'] . '">'. $rows['nombre'] . '</a></h1>';?>
			</div>
			<div id = 'imagenONG'>
				<center>
				<!--<p><img src="img/panda.png" width="600" /></p>-->
				<?php echo '<p><img src="' . $rows["imagen"] . '" /></p>'?>
				<h4>Descripción</h4>
				
				<!--<p>Aqui ira la descripcion de la ONG</p>-->
				<?php echo '<p>' . $rows["descripcionLarga"] . '</p>'?>
				</center>
			</div>
			<div id = "datos">
				<div id = "recaudado">
					<!--<div id= "recaudacion">Recaudacion: 89.536 euros       Meta: 100.000 euros</div>-->
					<?php echo '<div id="recaudacion">Recaudacion:' . $rows["dineroAcumulado"] . 'euros   ----   Meta:' . $rows["dineroNecesario"] . 'euros</div>'?>
					<!--<div id= "meta">Meta: 100.000 euros</div>-->
					<div id = "barrainformativa">
						<?php echo'<p><progress value="'.$rows["dineroAcumulado"].'" max="'.$rows["dineroNecesario"].'"></progress></p>'?>
					</div>
				</div>
				<div id = "datoscantidad">
					<div id= "cantidad"> Cantidad:</div>
					<form action="vistaAnadirDonacion.php" method="POST">
						<p><input type="text" name="cantidad">
						<?php echo '<input type="hidden" name="idProyect" value="'. $rows["idProyecto"] .'">'?>
						<input type= "submit" name ="donar" value = "Donar" size="20">
						</p>
					</form>
					<?php $sql->free();?>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
