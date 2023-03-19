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
$queryArchivos = "SELECT `pdf_1`, `pdf_2` FROM `registro_calificaciones` WHERE `users_id`=$id;"; 
$result = mysqli_query($link, $queryArchivos);
$archivos = mysqli_fetch_row($result);

if ($archivos != null){
    $pdf1 = $archivos[0];
    $pdf2 = $archivos[1];
}else{
    $pdf1 = null;
    $pdf2 = null;
}
?>


<body>
     <h1></h1>
     <?php
     if ($pdf1 != null){
        echo '<iframe src="'.$pdf1.'" class="pdf">'.'</iframe>';
     ?>

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

    <?php }else{
        echo '<pre> EJERCICIO 1 PENDIENTE POR RESOLVER </pre>';
    }   
    ?>

    <h1></h1>
        <?php
        if ($pdf2 != null){
        echo '<iframe src="'.$pdf2.'" class="pdf">'.'</iframe>';
        ?>

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
            echo 'placeholder="'.$calificacion2 .'"';
        }
        echo '/>';
        echo '<input name="id_usuario" hidden value="'.$id.'"/>';
        echo '<input name="nombre_curso" hidden value="'.$curso.'"/>';
        ?>
        <input type="submit" name="guardarCalificacionE2"/>
    </form>
    <?php }else{
        echo '<pre> EJERCICIO 2 PENDIENTE POR RESOLVER </pre>';
    }   
    ?>


</body>