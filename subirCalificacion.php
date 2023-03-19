<?php
echo print_r($_POST);

include("valida_pagina.php");

$id = $_POST['id_usuario'];
// $calificacion2 = $_POST['calificacionEjercicio2'];
$nombreCurso = $_POST['nombre_curso'];

$queryIdCurso = 'SELECT id FROM cursos WHERE nombre="'.$nombreCurso.'";';
echo $queryIdCurso;
$result = mysqli_query($link, $queryIdCurso);
$idCurso = mysqli_fetch_row($result);
echo print_r ($idCurso);
// $idCurso = 60;

if(isset($_POST["guardarCalificacionE1"])){
    if (isset($_POST["calificacionEjercicio1"]) || $_POST["calificacionEjercicio1"] == ""){
        $calificacion1 = $_POST['calificacionEjercicio1'];
        $queryGuardar = "UPDATE `calificaciones` SET `calificacion1`=$calificacion1 WHERE `usuarios_id`=$id AND `cursos_id`=$idCurso[0];";
        $result = mysqli_query($link, $queryGuardar);
        header("Location: evaluarActividad.php?success=Se guardo la calificación del ejericio 1");
    }
}

if(isset($_POST["guardarCalificacionE2"])){
    if (isset($_POST["calificacionEjercicio2"]) || $_POST["calificacionEjercicio2"] == ""){
        $calificacion2 = $_POST['calificacionEjercicio2'];
        $queryGuardar = "UPDATE `calificaciones` SET `calificacion2` = $calificacion2 WHERE `usuarios_id`=$id AND `cursos_id`=$idCurso[0];";
        $result = mysqli_query($link, $queryGuardar);
        header("Location: evaluarActividad.php?success=Se guardo la calificación del ejericio 2");
    }
}