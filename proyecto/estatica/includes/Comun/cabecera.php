<?php
 	echo '<div id="cabecera">';
			echo '<div class="avatar">';
				if (isset($_SESSION['login']) && $_SESSION['login']) {
					$imagen = $_SESSION['img'];
					echo '<a href="vistaPerfilUsuario.php"><img src="'.$imagen.'" WIDTH=120 HEIGHT=120 ALT="Avatar usuario"> </a>';
				}
			echo '</div>';
			echo '<div class="titulo"> <IMG SRC="img/tituloPagina.png" WIDTH=500 HEIGHT=150 ALT="Avatar usuario"> </div>';
			echo '<div class="sesion">';
				if (isset($_SESSION['login']) && $_SESSION['login']) {
					echo '<a href="includes/logout.php"><IMG SRC="img/power.png" WIDTH=60 HEIGHT=60 ALT="Avatar usuario"></a>';
				}
			echo '</div>';
			echo '<div class="login">';
				if (isset($_SESSION['login']) && $_SESSION['login']) {
					echo 'Welcome, ' .$_SESSION['nombre'];
				} else {
					echo '<p>Usuario desconocido. <a href="login.php">Inicia sesion</a> o <a href="registrate.php">Registrate</a>!</p>';
				}
			echo '</div>';
 	echo '</div>'
?>