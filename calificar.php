<?php
include("valida_pagina.php");
include("head.php");
include("menu.php");
$participante = $_GET["participante"];
$curso = $_GET["curso"];
$actividad_1 = $_GET["nombre_actividad_1"];
$actividad_2 = $_GET["nombre_actividad_2"];
$id=$_GET["id"];
$calificacion1=$_GET["calificacion1"];
$calificacion2=$_GET["calificacion2"];

?>



<body>
     <h1>Este es el PDF</h1>
    <h2>Nombre del participante:</h2>
    <?php echo $participante ?>
    <h2>Curso:</h2>
    <?php echo $curso ?>
    <h2>Nombre de la actividad 1:</h2>
    <?php echo $actividad_1 ?>
    <form method="post" enctype="multipart/form-data" action="subirCalificacion.php"> 
        <label>Escribe la calificación</label>
        <?php
        echo '<input type= "number" name="calificacionEjercicio1" required max="10" min="0" ';
        if ($calificacion1 != null) {
            echo 'placeholder="'.$calificacion1 . '"';
        }
        echo '/>';
        echo '<input name="id_usuario" hidden value="'.$id.'"/>';
        echo '<input name="nombre_curso" hidden value="'.$curso.'"/>';
        ?>
        <input type="submit" name="guardarCalificacionE1"/>
    </form>

    <h1>Este es el PDF</h1>
    <h2>Nombre del participante:</h2>
    <?php echo $participante ?>
    <h2>Curso:</h2>
    <?php echo $curso ?>
    <h2>Nombre de la actividad 2:</h2>
    <?php echo $actividad_2 ?>
    <form method="post" enctype="multipart/form-data" action="subirCalificacion.php"> 
        <label>Escribe la calificación</label>

        
        <?php
        echo '<input type= "number" name="calificacionEjercicio2" required max="10" min="0" ';
        if ($calificacion2 != null) {
            echo 'placeholder="'.$calificacion2 . '"';
        }
        echo '/>';
        echo '<input name="id_usuario" hidden value="'.$id.'"/>';
        echo '<input name="nombre_curso" hidden value="'.$curso.'"/>';
        ?>
        <input type="submit" name="guardarCalificacionE2"/>
    </form>

</body>