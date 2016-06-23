<?php
<<<<<<< HEAD
		use \AW\proyecto\estatica\includes\Aplicacion as App;
		$app = App::getSingleton();
=======
use \AW\proyecto\estatica\includes\Aplicacion as App;
	$app = App::getSingleton();
>>>>>>> 27c237d773b5ce928203a6af043f1e97e52b6b49
        echo "<div id='sidebar-left'>
			<nav>
			<ul>
				<li><a href='index.php'>Inicio</a></li>
				<li><a href='vistaProyectoDonar.php'>Donaciones</a></li>
				<li><a href='voluntariosONGUs.php'>Voluntarios</a></li>
				<li><a href='conocenos.php'>Conocenos</a></li>
				<li><a href='tienda.php'>Tienda</a></li>";
<<<<<<< HEAD
				if ($app->usuarioLogueado() && $app->esAdmin())
=======
				if (isset($_SESSION['login']) && $_SESSION['login'] && $app->tieneRol("Admin"))
>>>>>>> 27c237d773b5ce928203a6af043f1e97e52b6b49
					echo "<li><a href='panelAdmin.php'>Administracion</a></li>";
		echo "</ul>
		</nav>
	</div>";

?>
