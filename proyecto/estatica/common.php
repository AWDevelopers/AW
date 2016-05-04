 <?php
 	echo '<div id="cabecera">';
			echo '<div class="avatar"> <a href="perfilUsuario.php"><IMG SRC="img/usuarioSF.png" WIDTH=120 HEIGHT=120 ALT="Avatar usuario"> </a> </div>';
			echo '<div class="titulo"> <IMG SRC="img/tituloPagina.png" WIDTH=500 HEIGHT=150 ALT="Avatar usuario"> </div>';
			echo '<div class="sesion"> <IMG SRC="img/power.png" WIDTH=60 HEIGHT=60 ALT="Avatar usuario"> </div>';		
 	echo '</div>';
	echo '<div id="sidebar-left">';
		echo '<nav>';
			echo '<ul>';
				echo '<li><a href="index.php">Inicio</a></li>';
            	echo '<li><a href="vistaProyectoDonar.php">Donaciones</a></li>';
            	echo '<li><a href="voluntariosONGUs.php">Voluntarios</a></li>';
            	echo '<li><a href="conocenos.php">Conocenos</a></li>';
            	echo '<li><a href="tienda.php">Tienda</a></li>';
        	echo '</ul>';
        	echo '<a id="pull" href="#"></a>';
        echo '</nav>';
	echo '</div>';

/*
$(function() {
    var pull = $('#pull');
    menu = $('nav ul');
    menuHeight = menu.height();
 
    $(pull).on('click', function(e) {
        e.preventDefault();
        menu.slideToggle();
    });
});
 
$(window).resize(function(){
    var w = $(window).width();
    if(w > 320 && menu.is(':hidden')) {
        menu.removeAttr('style');
    }
});
*/
