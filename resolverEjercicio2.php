
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
$_SESSION['actividad'] = $actividad;
$_SESSION['curso'] = $curso;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<body>
    <script>
        function reiniciar(){
            let date = new Date();
            date = date.getTime();
            display=document.getElementById("timer");
            setTimer(date,display);
        }


        function setTimer(duration, display){
                let inputRadios = document.querySelectorAll("#radio");
                    for (let i=0; i<inputRadios.length; i++){
                        inputRadios[i].hidden = false;
                    }
             let conteo = setInterval(function(){
                let now = new Date();
                let tiempoRestante = now.getTime() - duration;
                let seconds = Math.trunc(tiempoRestante/1000);
                let minutes = Math.trunc(seconds/60);
                let remainingSeconds = 60 - seconds; 
                remainingSeconds = remainingSeconds < 10 ? "0" + remainingSeconds : remainingSeconds;
                minutes = minutes < 10 ? "0" + minutes : minutes;
                display.textContent = minutes + ":" + remainingSeconds;
                if (seconds >15){
                    clearInterval(conteo);
                    display.textContent = "Finalizo el tiempo ";
                        for (let i=0; i<inputRadios.length; i++){
                        inputRadios[i].hidden = true;
                    }
                }
                
            },1000)
        }
        window.onload = function() {
            let date = new Date ()
            date = date.getTime()
            display = document.getElementById("timer");
            setTimer(date,display) 
        } 
    </script>

    <form method="post" enctype="multipart/form-data" action="respuestasEjercicio2.php">
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
                    01:00
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
                        foreach ($arrayLinkImagenes as $key => $linkImagen){                         
                            echo '<img src="'. $linkImagen . '" alt="" style="width:150 px;"/>';
                            echo '<input required type="radio" id="radio" name="'.$pregunta["pregunta"].'" value="'.$key.'?'.$linkImagen.'"/>';
                           } 
                                               
                    ?>
                    
                </div>
            </div>

            <?php
            }
            ?>


            

        <div>
            
            <input type="submit" name="btn_guardar"/>
        </div>
    </form>
        <button onclick="reiniciar()">Reiniciar</button>



</body>
</html>