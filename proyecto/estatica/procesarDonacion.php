<!DOCTYPE html>
<html>
<head>
	<title>Pagina con estilos</title>
	
	<link rel="stylesheet" type="text/css" href="css/procesarDonacion.css"/>
	<link rel="stylesheet" type="text/css" href="css/estilos.css"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
	<div id="contenedor">
		<?php require 'common.php'; require 'ScriptDonaciones.php' ?>
		<div id="contenido">
			<div id="datos">
				<?php
					if(!$_POST['cantidad']){
						$ok=false;
				?>
						<h3>Se ha procudido un error</h3>
			            <p>No ha introducido la cantidad que quiere donar.
			            <a href="donaciones.php">Inténtalo de nuevo.</a></p>
			    <?php
			    	}else{
			    		$valor = $_POST['cantidad']; 
			    		if(!is_numeric($valor)){
			    			$ok=false;
			    ?>
			    			<h3>Se ha procudido un error</h3>
				            <p>El dato que ha introducido no es una cantidad válida.
				            <a href="donaciones.php">Inténtalo de nuevo.</a></p>
			    <?php
			    		}else{
			    			$ok=true;
			    			//addDonacion($valor);
			    ?>
			    			<h3>Donación realizada con éxito!</h3>
				            <p>Ha realizado una donación de <?php echo $valor?> euros en <a href="donaciones.php">nombre de la ONG.</a></p>
				            <p> Use el menú de la izquierda para seguir navegando. </p>    
				<?php
						}
			    	}
			    ?>
			</div>
			<div id = "imagen">
				<?php 
					if($ok){ 
				?> 
						<p><img src="img/gracias.png" width="300" height="300" /></p>
				<?php
					}else{ 
				?> 
						<p><img src="img/oops.png" width="250" height="200" /></p>
				<?php
					}
				?>
			</div>
		</div>
	</div>
</body>
</html>

