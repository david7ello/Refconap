<?php
include("valida_pagina.php");
include("head.php");
include("menu.php");

$actividad = $_SESSION['actividad'];
$curso = $_SESSION['curso'];
$nombre = $_SESSION['nombre'];




?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <link rel="stylesheet" href="./css/mapaMental.css"/>
    </head>

    <body>

    <div class="grid"> <!--Contenedor principal-->
        <div class="concepto"><label>Pregunta</label></div>

        <?php
            $i=0;
            foreach($_POST as $respuesta){
                $datos = explode("?", $respuesta);
                if ($i==0){
                    echo '<div class="primerImagen">';
                }elseif ($i==1) {
                    echo '<div class="segundaImagen">';
                }elseif ($i==2) {
                    echo '<div class="terceraImagen">';
                }elseif ($i==3) {
                    echo '<div class="cuartaImagen">';
                }
                if ($i<=3){
                    echo '<img src="'.$datos[1].'" alt="Primer imagen" style="width: 150px;"/>';
                    echo '<label>Primer pregunta</label>';
                    echo '</div>';
                }
                $i++;
            }
        ?>
    </div>
    </body>
</html>
