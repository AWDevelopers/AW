<?php
        echo "<div id='sidebar-left'>
			<nav>
			<ul>
				<li><a href='index.php'>Inicio</a></li>
				<li><a href='vistaProyectoDonar.php'>Donaciones</a></li>
				<li><a href='voluntariosONGUs.php'>Voluntarios</a></li>
				<li><a href='conocenos.php'>Conocenos</a></li>
				<li><a href='tienda.php'>Tienda</a></li>";
				if (isset($_SESSION['login']) && $_SESSION['login'] && $_SESSION['roles'] == "Admin")
					echo "<li><a href='panelAdmin.php'>Administracion</a></li>";
		echo "</ul>
		</nav>
	</div>";

?>
