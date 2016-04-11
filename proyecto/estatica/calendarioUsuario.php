<!DOCTYPE html>
<html>
<head>
    <title>Calendario Voluntarios</title>
    <link rel="stylesheet" type="text/css" href="estilos.css"/>
    <link rel="stylesheet" type="text/css" href="calendario.css"/>
</head>
<body>
    <div id='contenedor'>
        <?php require 'common.php'; ?>
        <div id="contenidoCalendario">
            
        	    <div id = "calendario">
                    <p align= center id= "mes" ><strong>ABRIL<strong></p>
                    <center>
                        <table>
                        
                            <tr>
                                <th>L</th>
                                <th>M</th>
                                <th>X</th>
                                <th>J</th>
                                <th>V</th>
                                <th>S</th>
                                <th>D</th>
                            </tr>
                            <tr>
                                <th> </th>
                                <th> </th>
                                <th> </th>
                                <th> </th>
                                <?php
                                    $dia = 1;
                                    $diaSemana = 4;
                                    echo '<form>';
                                    for($semana = 0; $semana <5; $semana++){
                                        while($diaSemana < 7 && $dia <31){
                                            $diaSemana++;

                                            echo'<th><input id= "dia" type="button" name="boton" onclick="muestraFecha('. $dia .')" value="'.$dia.'"/></th>';
                                            $dia++;
                                        }
                                        $diaSemana = 0;
                                        echo '</tr><tr>';
                                    }
                                    echo '</form>';
                                    
                                ?>

                            </tr>
                        </table>
                    </center>
                </div>
                <div id = "horas">
                    <form ><center>

                        <div id="inicio">
                            <p>Hora inicio</p>
                            <input type="text" name = "iniHoras" size = 2></input> :
                            <input type="text" name = "iniMins" size = 2></input> 
                        </div>

                        <div id ="fin">
                            <p>Hora fin</p>
                            <input type="text" name = "finHoras" size = 2></input> :
                            <input type="text" name = "finMins" size = 2></input>
                            
                        </div>
                        
                        <button id= "anadir" type="submit" name = "añadir">AÑADIR</button> 
                        
                    </center></form>
                </div>

                <div id = "mostrarHoras">

                    <p id="diaMes"></p>
                    <?php
                        
                        if($_GET){
                            $iHoras = $_GET['iniHoras'];
                            $iMins = $_GET['iniMins'];
                            $fHoras = $_GET['finHoras'];
                            $fMins = $_GET['finMins'];

                            if($iHoras >=0 && $iHoras < 24 && $fHoras >= 0 && $fHoras < 24){
                                if($iMins >=0 && $iMins < 60 && $fMins >= 0 && $fMins < 60){
                                    if($iHoras< $fHoras){
                                        echo '<p>'.$iHoras.':'.$iMins.' - '.$fHoras.':'.$fMins.'</p>';
                                     }else{
                                        echo '<p>Hora incorrecta</p>';
                                     }
                                }
                            }
                        }
                        

                    ?>  
                </div>
            

                <div id ="pieCalendario">
                    <center>
                        <p>Selecciona uno o varios días del calendario, indica las horas de inicio y fin de tu voluntariado y pulsa el botón añadir para añadirla a tu bolsa de horas.</p>

                          
                        <button class= "boton" type="button" name = "confirmar" value = "confirmar"onclick="popup()">CONFIRMAR</button> 
                    </center>
               </div>

                <script >
                    function muestraFecha($dia){
                        if($dia < 30 && $dia >0){
                            var texto = 'Dia: ' + $dia;
                            document.getElementById("diaMes").innerHTML = texto;
                        }
                    }
                    function popup(){
                        alert("CONFIRMADO");
                    }
            </script>   
        </div>

        
    </div>
</body>
</html>
