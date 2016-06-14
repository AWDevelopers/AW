<?php

//Inicio del procesamiento
session_start();

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="estilo.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Portada</title>
</head>

<body>

<div id="contenedor">

<?php
	require("cabecera.php");
	require("sidebarIzq.php");
?>

	<div id="contenido">
		<h1>Registro del nuevo usuario</h1>

		<form action="index.php" method="POST">
		<fieldset>
		<legend>Datos del usuario</legend>
		<p>
			<label>Correo:</label> <input type="text" name="email" id="email"/> 
			<img id="iconoNO" src="img/no.png">
			<img id="iconoOk" src="img/ok.png" hidden="true">
		</p>
		<p>
			<label>User:</label> <input type="text" name="username" id="campoUser"/> 
			<img id="iconoNO" src="img/no.png" >
			<img id="iconoOk" src="img/ok.png" hidden="true">
		</p>
		<p><label>Password:</label> <input type="password" name="password" /><br /></p>
		<button type="submit">Entrar</button>
		</fieldset>


	</div>
		<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
		<script type="text/javascript">
		$("#email").change(function(){
				if(correoValido($("#email").val())){
					$('#iconoNO').hide();
					$('#iconoOk').show();
								//	Mostrar	icono	verde
				}else{
					$('#iconoOK').hide();
					$('#iconoNO').show();
				 			//	Ocultar	icono	verde
					 		//	Mostrar	icono	rojo
				}
		});

		var correoValido = function($email) {
		    // Expresion regular para validar el correo
		    var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;

		    // Se utiliza la funcion test() nativa de JavaScript
		    if (regex.test($email.trim())) {
		        return true;
		    } else {
		        return false;
		    }
		};

		$("#campoUser").change(function(){
		var	url="comprobarUsuario.php?user="+$("#campoUser").val();
		$.get(url,usuarioExiste);
		});

		var usuarioExiste =function($data,$status){
			alert("usuarioExiste");
		};

	</script>

<?php
	require("sidebarDer.php");
	require("pie.php");
?>


</div>

</body>
</html>