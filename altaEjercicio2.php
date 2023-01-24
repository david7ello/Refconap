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
        span = document.getElementById("respuestaCorrectaMostrada");
        input = document.getElementById("inputRespuestaCorrecta");
        txt = document.createTextNode(valorCorrecto);
        span.textContent =""
        span.appendChild(txt);
        input.value = valorCorrecto;
    }



</script>

<form className="appuno" action="imgApi.php" method="post" enctype="multipart/form-data">
      <h2>Alta de ejercicio 2</h2>
      <h2>Busca el curso:</h2>
      <input name="busquedaCurso" type="text"/>

      <h2>Escribe el nombre de la actividad</h2>
      <input id="actividad" name="actividad" type="text" required/>
      
      
      
      <h2>Pregunta número:</h2>
     
        <select id="numeroPregunta" name="numeroPregunta">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        </select>

      <h2>Escribe tu pregunta</h2>
      <input id="pregunta" name="pregunta" type="text" required/>
      
      <h2>Respuesta correcta es:</h2>
      <input id="inputRespuestaCorrecta" name="inputRespuestaCorrecta" class="" required/>
      <span id="respuestaCorrectaMostrada" name="respuestaCorrectaMostrada">Ninguna</span> 

      <h2>Coloca tus imagenes</h2>
      <div class="inputs">
        <input id="imagenOpcionA" name="file1" type="file" accept=".jpg" required/>
        <input 
          id="opcionA"
          name="cambioCheck"
          type="radio"
          value="A"
          onclick="darValorCorrecta(event)"
        />
      </div>

      <div class="inputs">
        <input id="imagenOpcionB" name="file2" type="file" accept=".jpg"required />
        <input
          id="opcionB"
          name="cambioCheck"
          type="radio"
          value="B"
          onclick="darValorCorrecta(event)"
        />
      </div>

      <div class="inputs">
        <input id="imagenOpcionC" name="file3" type="file" accept=".jpg" required />
        <input
          id="opcionC"
          name="cambioCheck"
          type="radio"
          value="C"
          onclick="darValorCorrecta(event)"
        />
      </div>

      <div class="inputs">
        <input id="imagenOpcionD" name="file4" type="file" accept=".jpg" required/>
        <input
          id="opcionD"
          name="cambioCheck"
          type="radio"
          value="D"
          onclick="darValorCorrecta(event)"
        />
      </div>

      <div class="siguiente">
        <a href="ejercicioDos.php">
        <button>Cancelar</button>
        </a>
        <input type="submit" name="btn_guardarPregunta">Guardar pregunta</input>
        <button> Anterior</button>
        <button> Siguiente</button>
      </div>
</form>
  









</body>