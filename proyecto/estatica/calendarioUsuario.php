<!DOCTYPE html>
<html>
<head>
    <title>Calendario Voluntarios</title>
    <link rel="stylesheet" type="text/css" href="css/estilos.css"/>
        <link rel="stylesheet" type="text/css" href="css/colorsandtext.css"/>
    <!--<link rel="stylesheet" type="text/css" href="css/calendario.css"/>-->

    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
        <script type="text/javascript">
            var num = 0;
            function aniadeHoras() {
                var horaIni = document.getElementById("horaIni").value;
                var horaFin =  document.getElementById("horaFin").value;
                var dia = document.getElementById("datepicker").value;
                var error = document.getElementById("error");
                if(horaFin > horaIni){
                    if(horaIni > "10:00"){
                        if(horaFin < "22:00"){
                            document.getElementById("mostrarHoras").innerHTML += "<div id="+num+"> <p id='dia'> Dia: "+ dia +"</p> <p id='horaI'>Hora inicio: "+horaIni+"</p> <p id='horaF'>Hora fin: "+horaFin+"</p> <button onclick='eliminaHora("+num+")' id= 'eliminar' type='submit' name = 'eliminar'>Eliminar</button></div> ";
                            num++;
                            error.innerHTML = "";
                        } else error.innerHTML = "hora de finalizacion superior a las 22:00";
                    } else error.innerHTML = "<p>hora de inicio inferior a las 10:00</p>";
                } else error.innerHTML = "hora de inicio superior a la hora de finalizacion";
            } 

            function eliminaHora(num){
                var div = document.getElementById(num);
                div.innerHTML = "";
            }  

            function enviarDatos(){
                var dias = document.getElementById("dia");
                var horasIni = document.getElementById("horaI");
                var horasFin = document.getElementById("horaF");
                
            }
        </script>
</head>
<body>
    <div id="contenedor">
        <?php require ("common.php");?>

        <div class="contenido">
        <?php

        require_once "includes/ViewScripts/VoluntariosVista.php";
        $vista = new VoluntariosVista();
        $vista->muestraPanelVoluntariado($_GET['id']);
        ?>

               

        </div>
    </div>
</body>
</html>

