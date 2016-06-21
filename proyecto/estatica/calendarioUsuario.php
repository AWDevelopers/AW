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
        <?php

        require_once "includes/ViewScripts/VoluntariosVista.php";
        $vista = new VoluntariosVista();
        $vista->muestraPanelVoluntariado($_GET['id']);
        ?>

               
        </div>

        </div>
    </div>
</body>
</html>

