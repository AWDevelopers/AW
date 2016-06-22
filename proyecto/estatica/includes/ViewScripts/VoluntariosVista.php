<?php
	class VoluntariosVista{

		private $gestorProyectos;
		function __construct(){
			require_once "/../ModelScripts/GestorProyectos.php";
			$this->gestorProyectos = new GestorProyectos();
		}

		function muestraPanelVoluntariado($idProyecto){
			$proyecto = $this->gestorProyectos->getProyecto($idProyecto);
			$fechaFin = $proyecto->getFechaFin();
			$fechaIni = $proyecto->getFechaCreacion();
			$html = <<<EOS
            
        	   <div id= "calendario">
                    <p>Día</p>
                    <input id="datepicker" type="date" name = "fecha" min=$fechaIni max=$fechaFin></input>
                </div>
                <div id = "horas">
                        <div id="inicio">
                            <p>Hora inicio</p>
                            <input id="horaIni" type="time" name = "iniHoras" size = 2></input> 
                        </div>

                        <div id ="fin">
                            <p>Hora fin</p>
                            <input id="horaFin" type="time" name = "finHoras" size = 2></input> 
                        </div>
                        <button onclick="aniadeHoras()" id= "anadir" type="submit" name = "añadir">AÑADIR</button> 
                        <div id="error"></div>
                </div>

                <div id = "mostrarHoras">
                </div>
                <div id ="pieCalendario">
                        <p>Selecciona uno o varios días del calendario, indica las horas de inicio y fin de tu voluntariado y pulsa el botón añadir para añadirla a tu bolsa de horas.</p>
                        <h1> FECHA DE INICIO DEL PROYECTO: $fechaIni </h1>
                        <h1> FECHA DE FIN DEL PROYECTO: $fechaFin </h1>

                           <form name="panelHorasVoluntarios" action="" method="POST">
                        <input class= "boton" type="submit" name = "confirmar" value = "CONFIRMAR"></input> 
                        </form>
               </div>
               
EOS;
		echo $html;
		}


	}




?>