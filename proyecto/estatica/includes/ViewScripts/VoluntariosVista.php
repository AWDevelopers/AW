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
			<div id="contenidoCalendario">
            
        	   <div id= "calendario">
                <form>
                    <p>Día</p>
                    <input id="datepicker" type="date" name = "fecha" min=$fechaIni max=$fechaFin></input>
                </form>
               
                </div>
                <div id = "horas">
                    <form >

                        <div id="inicio">
                            <p>Hora inicio</p>
                            <input type="time" name = "iniHoras" size = 2></input> 
                        </div>

                        <div id ="fin">
                            <p>Hora fin</p>
                            <input type="time" name = "finHoras" size = 2></input> 
                        </div>
                        
                        <input id= "anadir" type="submit" name = "añadir">AÑADIR</input> 
                        </form>
                </div>

                <div id = "mostrarHoras">
                </div>
                <div id ="pieCalendario">
                        <p>Selecciona uno o varios días del calendario, indica las horas de inicio y fin de tu voluntariado y pulsa el botón añadir para añadirla a tu bolsa de horas.</p>
                        <h1> FECHA DE INICIO DEL PROYECTO: $fechaIni </h1>
                        <h1> FECHA DE FIN DEL PROYECTO: $fechaFin </h1>

                          
                        <button class= "boton" type="button" name = "confirmar" value = "confirmar">CONFIRMAR</button> 
               </div>
EOS;
		echo $html;
		}


	}




?>