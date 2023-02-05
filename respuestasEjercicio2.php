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
            foreach($_POST as $respuesta){
                $datos = exploted("?", respuesta);
                if ($key==0){
                    echo '<div class="primerImagen">';
                }elseif ($key==1) {
                    echo '<div class="segundaImagen">';
                }elseif ($key==2) {
                    echo '<div class="terceraImagen">';
                }elseif ($key==3) {
                    echo '<div class="cuartaImagen">';
                }
                echo '<img src="'.$datos[1].'" alt="Primer imagen" style="width:150px"/>';
                echo '<label>Primer pregunta</label>';
            }

        ?>

        <div class="segundaImagen"> <!--Tercera Columna-->
            <img src="" alt="Segunda imagen"/>
            <label>Segunda pregunta</label>
        </div>

        <div class="terceraImagen"> <!--Primera columna fila 2-->
            <img src="" alt="tercera imagen"/>
            <label>tercera pregunta</label>
        </div>

        <div class="cuartaImagen"> <!--Segunda columna fila 2-->
            <img src="" alt="cuarta imagen"/>
            <label>cuarta pregunta</label>
        </div>
    </div>





    </body>
</html>
