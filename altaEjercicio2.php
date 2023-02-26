<?php
include("valida_pagina.php");

$queryCursos = "SELECT * FROM cursos";
$cursos = mysqli_query($link, $queryCursos);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php
include("head.php")
?>

<?PHP
include("menu.php")
?>




<body class="fondo">
<script type="text/javascript">
    let valorCorrecto = "";
    function crearArchivo(){
        let pregunta = document.getElementById("pregunta");
        let numeroPregunta = document.getElementById("numeroPregunta");
        let imagenOpcionA = document.getElementById("imagenOpcionA");
        console.log(pregunta.value);
        console.log(numeroPregunta.value);
        console.log(imagenOpcionA.files[0]);
        console.log(valorCorrecto);
        event.preventDefault();
    }

    function darValorCorrecta(event){
        valorCorrecto=event.target.value;
        if (event.target.name==="opcionPregunta1"){
            span = document.getElementById("respuestaCorrectaMostrada1");
            input = document.getElementById("inputRespuestaCorrecta1");
        }else if (event.target.name==="opcionPregunta2"){
            span = document.getElementById("respuestaCorrectaMostrada2");
            input = document.getElementById("inputRespuestaCorrecta2");
        }else if (event.target.name==="opcionPregunta3"){
            span = document.getElementById("respuestaCorrectaMostrada3");
            input = document.getElementById("inputRespuestaCorrecta3");
        }else if (event.target.name==="opcionPregunta4"){
            span = document.getElementById("respuestaCorrectaMostrada4");
            input = document.getElementById("inputRespuestaCorrecta4")
        }
        txt = document.createTextNode(valorCorrecto);
        span.textContent =""
        span.appendChild(txt);
        input.value = valorCorrecto;
    }



</script>

<?php 
if(!empty($_GET["sucess"])){
  echo '<br/>';
  echo '<div class =""> Actividad guardada </div>';
  echo '<br/>';
}
?>

<form className="appuno" action="imgApi.php" method="post" enctype="multipart/form-data">
      <h2>Alta de ejercicio 2</h2>
      <h2>Busca el curso</h2>
      <label>Elige el curso:</label>
      <input list="lista" name="curso" id="seleccionCurso" required/>
        <?php
          echo "<datalist id='lista'>";
          while ($fila = $cursos->fetch_assoc()){
            echo "<option>". $fila["nombre"]."</option>";
          }
            echo "</datalist>";
        ?>


      <h2>Escribe el nombre de la actividad</h2>
      <input id="actividad" name="actividad" type="text" required/>

      <?php include('altaPregunta1Ejercicio2.php');
            include('altaPregunta2Ejercicio2.php');
            include('altaPregunta3Ejercicio2.php');
            include('altaPregunta4Ejercicio2.php')
            ?>

      <div>
        <a class="btn btn-danger" href="ejercicioDos.php">Cancelar
        </a>
        <input class="btn btn-sucess" type="submit" name="btn_guardarPregunta"></input>

      </div>
</form>
  









</body>