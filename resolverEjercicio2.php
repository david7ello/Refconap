
<?php
include("valida_pagina.php");
include("head.php");
include("menu.php");
$actividad = $_POST["actividad"];
$queryPreguntas = "SELECT `pregunta`, `respuestas_id`, `respuesta_correcta` FROM `ejercicio_2` WHERE `nombre_actividad`='".$actividad."';";
$preguntas = mysqli_query($link, $queryPreguntas);

$queryCurso = "SELECT DISTINCT cursos_id FROM ejercicio_2 WHERE nombre_actividad='".$actividad."';";
$curso = mysqli_query($link, $queryCurso);
$cursoInfo = mysqli_fetch_row($curso);
$cursoId = $cursoInfo[0];
$queryCurso = "SELECT * FROM cursos WHERE id=$cursoId";
$curso = mysqli_query($link, $queryCurso);
$cursoInfo = mysqli_fetch_row($curso);
$instructor_id =$cursoInfo[5];
$queryInstructor = "SELECT DISTINCT nombre, apellidos FROM usuarios WHERE id_user=$instructor_id;";
$instructor = mysqli_query($link, $queryInstructor);
$instructorInfo = mysqli_fetch_row($instructor);

$curso = $cursoInfo[1];
$nombreInstructor = $instructorInfo[0] . " " . $instructorInfo[1];

$nombre = $_SESSION["nombre"];

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<body>
    <script>
        let time = 60;
        function setTimer(duration, display){
            var duration = time, minutes, seconds;
            setInterval(function(){
                minutes = parseInt(time/60,10);
                seconds = parseInt(time % 60, 10);
                seconds = seconds--;
                display-textContent = minutes + ":" + seconds
            })
        }
        window.onload = function() {
            display = document.getElementById("timer");
            setTimer(1,display) 
        } 
    </script>

    <form>
        <div>
            <h1>Nombre del ejercicio:</h1>
            <?php
                echo $actividad;
            ?>
            <h2>Nombre del participante:</h2>
            <?php
                echo $nombre;
            ?>
            <h2>Nombre del curso:</h2>
            <?php
                echo $curso;
            ?>

            <h2>Nombre del instructor:</h2>
            <?php
                echo $nombreInstructor;
            ?>

            <h3>Tiempo restante: 
                <span id="timer">
                    00:00
                </span>min
            </h3>

            <?php
            while($pregunta = $preguntas->fetch_assoc()){
            ?>
                <label>
                    <?php
                       echo $pregunta["pregunta"];
                
                    ?>
                </label>

                <div>
                    <?php
                        $imagenesRespuestas = "SELECT respuesta_a, respuesta_b, respuesta_c, respuesta_d FROM `respuestas_ejercicio_2` WHERE `id` = '".$pregunta["respuestas_id"]."';";
                        $linkImagenes = mysqli_query($link, $imagenesRespuestas);
                        $arrayLinkImagenes = mysqli_fetch_row($linkImagenes);
                        foreach ($arrayLinkImagenes as $linkImagen){
                           //if ($linkImagen != $pregunta["respuestas_id"]){
                            echo '<img src="'. $linkImagen . '" alt="" style="width:150 px;"/>';
                           } 
                        
    
                        
                    ?>
                    <input type="radio" />
                </div>
            </div>

            <?php
            }
            ?>


            

        <div>
            <button>Siguiente</button>
            <button>Terminar</button>
        </div>


    </form>
</body>
</html>