<!DOCTYPE html>
<html>
<head>
    <title>Calendario Voluntarios</title>
    <link rel="stylesheet" type="text/css" href="css/estilos.css"/>
        <link rel="stylesheet" type="text/css" href="css/colorsandtext.css"/>
    <!--<link rel="stylesheet" type="text/css" href="css/calendario.css"/>-->
    
</head>
<body>
    <div id="contenedor">
        <?php require ("common.php");?>

        <div class="contenido">
        <div id="contenidoCalendario">
            
        	   <div id= "calendario">
                <form>
                    <p>Día</p>
                    <input type="date" name = "fecha"></input>
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
                        
                        <button id= "anadir" type="submit" name = "añadir">AÑADIR</button> 
                        </form>
                </div>

                <div id = "mostrarHoras">

                    <p >Dia: 23 Abril</p>
                    <p >Hora: 12:00 - 13:00</p>

                    
                </div>
            

                <div id ="pieCalendario">
                        <p>Selecciona uno o varios días del calendario, indica las horas de inicio y fin de tu voluntariado y pulsa el botón añadir para añadirla a tu bolsa de horas.</p>

                          
                        <button class= "boton" type="button" name = "confirmar" value = "confirmar">CONFIRMAR</button> 
               </div>

               
        </div>

        </div>
    </div>
</body>
</html>

