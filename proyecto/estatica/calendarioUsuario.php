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
            var voluntariados = new Array();
            function aniadeHoras() {
                var horaIni = document.getElementById("horaIni").value;
                var horaFin =  document.getElementById("horaFin").value;
                var dia = document.getElementById("datepicker").value;
                var error = document.getElementById("error"); 
                if(dia != ""){
                    if(horaFin > horaIni){
                        if(horaIni > "10:00"){
                            if(horaFin < "22:00"){
                                document.getElementById("mostrarHoras").innerHTML += "<div id="+num+"> <p id='dia' name='dia'> Dia: "+ dia +"</p> <p id='horaI' name='horaI'>Hora Inicio:"+horaIni+"</p> <p id='horaF' name='horaF'>Hora fin:"+horaFin+"</p> <button onclick='eliminaHora("+num+")' id= 'eliminar' type='submit' name = 'eliminar'>Eliminar</button></div> ";
                                voluntariados[num] = {dia:dia, horaF:horaFin, horaI:horaIni};
                                num++;
                                error.innerHTML = "";
                            } else error.innerHTML = "hora de finalizacion superior a las 22:00";
                        } else error.innerHTML = "<p>hora de inicio inferior a las 10:00</p>";
                    } else error.innerHTML = "hora de inicio superior a la hora de finalizacion";
                }else error.innerHTML = "selecciona un dia";
            } 

            function eliminaHora(num){
                var div = document.getElementById(num);
                div.innerHTML = "";
                for(var i = voluntariados.length; i > num; i--){
                    voluntariados[i] = voluntariados[i-1];
                }
                num--;
            }  

            function enviarDatos(idProyecto){
                var dias = document.getElementsByTagName("dia");
                var horasIni = document.getElementsByTagName("horaI");
                var horasFin = document.getElementsByTagName("horaF");
                var error = document.getElementById("error");
                for(var i = 0; i < voluntariados.length; i++){
                    $.ajax({
                        type: "POST",
                        url: "includes/formNuevoVoluntariado.php",
                        data: {"id":idProyecto, "dia":voluntariados[i]['dia'], "horaIni":voluntariados[i]['horaI'], "horaFin":voluntariados[i]['horaF']},
                        success: function(data) {
                            
                        }
                    });
                }
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

