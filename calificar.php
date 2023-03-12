<?php
include("valida_pagina.php");
include("head.php");
include("menu.php");
$participante = $_GET["participante"];
$curso = $_GET["curso"];
$actividad_1 = $_GET["nombre_actividad_1"];
$actividad_2 = $_GET["nombre_actividad_2"];
$id=$_GET["id"];

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
        <input name="calificacion" required/>
        <input type="submit" name="guardarCalificacion"/>
    </form>

    <h1>Este es el PDF</h1>
    <h2>Nombre del participante:</h2>
    <?php echo $participante ?>
    <h2>Curso:</h2>
    <?php echo $curso ?>
    <h2>Nombre de la actividad 2:</h2>
    <?php echo $actividad_1 ?>
    <form method="post" enctype="multipart/form-data" action="subirCalificacion.php"> 
        <label>Escribe la calificación</label>
        <input name="calificacion" required/>
        <input type="submit" name="guardarCalificacion"/>
    </form>

</body>