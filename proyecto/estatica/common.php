<?php include('includes/config.php'); ?>

<?php
 	echo '<div id="cabecera">';
			echo '<div class="avatar">';
				if (isset($_SESSION['login']) && $_SESSION['login']) {
					echo '<a href="perfilUsuario.php"><IMG SRC="img/usuarioSF.png" WIDTH=120 HEIGHT=120 ALT="Avatar usuario"> </a>';
				}
			echo '</div>';
			echo '<div class="titulo"> <IMG SRC="img/tituloPagina.png" WIDTH=500 HEIGHT=150 ALT="Avatar usuario"> </div>';
			echo '<div class="sesion">';
				if (isset($_SESSION['login']) && $_SESSION['login']) {
					echo '<a href="logout.php"><IMG SRC="img/power.png" WIDTH=60 HEIGHT=60 ALT="Avatar usuario"></a>';
				}
			echo '</div>';
			echo '<div class="login">';
				if (isset($_SESSION['login']) && $_SESSION['login']) {
					echo 'Welcome, ' .$_SESSION['usuario'];
				} else {
					echo '<p>Usuario desconocido. <a href="login.php">Iniciar sesion</a></p>';
				}
			echo '</div>';
 	echo '</div>'
?>

<div id="sidebar-left">
	<nav>
		<ul>
			<li><a href="<?php echo $urlAbsoluta ?>index.php">Inicio</a></li>
        	<li><a href="<?php echo $urlAbsoluta ?>vistaProyectoDonar.php">Donaciones</a></li>
        	<li><a href="<?php echo $urlAbsoluta ?>voluntariosONGUs.php">Voluntarios</a></li>
        	<li><a href="<?php echo $urlAbsoluta ?>conocenos.php">Conocenos</a></li>
        	<li><a href="<?php echo $urlAbsoluta ?>tienda.php">Tienda</a></li>
    	</ul>
    </nav>
</div>

