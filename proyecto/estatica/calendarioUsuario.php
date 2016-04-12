<!DOCTYPE html>
<html>
<head>
    <title>Calendario Voluntarios</title>
    <link rel="stylesheet" type="text/css" href="estilos.css"/>
    <link rel="stylesheet" type="text/css" href="calendario.css"/>
</head>
<body>
    <div id="contenedor">
        <?php require 'common.php'; ?>
        <div id="contenido">
            <div id="contenidoCalendario">
                
            	   <div id= "calendario">
                    <form>
                        <center>
                        <p>Día</p>
                        <input type="date" name = "fecha"></input>
                        </center>
                    </form>
                    </div>
                    <div id = "horas">
                        <form ><center>

                            <div id="inicio">
                                <p>Hora inicio</p>
                                <input type="time" name = "iniHoras" size = 2></input> 
                            </div>

                            <div id ="fin">
                                <p>Hora fin</p>
                                <input type="time" name = "finHoras" size = 2></input> 
                            </div>
                            
                            <button id= "anadir" type="submit" name = "añadir">AÑADIR</button> 
                            
                        </center></form>
                    </div>

                    <div id = "mostrarHoras">

                        <p id="diaMes"></p>
                        <?php
                            
                            if($_GET){
                                $iniHoras = $_GET['iniHoras'];
                                $finHoras = $_GET['finHoras'];
                                echo '<p>Hora: '.$iniHoras.' - '.$finHoras.'</p>';
                                        
                                
                            }
                            

                        ?>  
                    </div>
                

                    <div id ="pieCalendario">
                        <center>
                            <p>Selecciona uno o varios días del calendario, indica las horas de inicio y fin de tu voluntariado y pulsa el botón añadir para añadirla a tu bolsa de horas.</p>

                              
                            <button class= "boton" type="button" name = "confirmar" value = "confirmar">CONFIRMAR</button> 
                        </center>
                   </div>

                   
            </div>

       </div> 
    </div>
</body>
</html>
