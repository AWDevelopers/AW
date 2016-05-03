<?php
	session_start();
 	echo '<div id="cabecera">';
			echo '<h1>Mi gran página web</h1>';
			echo '<div class="saludo">';
				if(empty($_SESSION['login'])){
				    echo "Usuario desconocido. <a href='login.php'>Login</a>";
				}
				else
				{
				echo 'Welcome, '.$_SESSION['nombre'];
				echo " [<a href='logout.php'>Cerrar Sesion</a>]";
				}
			echo '</div>';	
 	echo '</div>';
 ?>