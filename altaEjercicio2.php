<?php
include("valida_pagina.php");
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
        console.log(valorCorrecto);
    }



</script>

<form className="appuno" action="imgApi.php" method="post" enctype="multipart/form-data">
      <h2>Alta de ejercicio 2</h2>
      <h2>Escribe tu pregunta</h2>
      <input id="pregunta" name="pregunta" type="text"  />
        <select id="numeroPregunta">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        </select>

      <h2>Coloca tus imagenes</h2>
      <h2>Respuesta correcta es </h2>

      <div class="inputs">
        <input id="imagenOpcionA" type="file" accept=".jpg" onChange={cargarImg1} />
        <input 
          id="opcionA"
          name="cambioCheck"
          type="radio"
          value="A"
          onclick="darValorCorrecta(event)"
        />
      </div>

      <div class="inputs">
        <input id="imagenOpcionB" type="file" accept=".jpg" onChange={cargarImg2} />
        <input
          id="opcionB"
          name="cambioCheck"
          type="radio"
          value="B"
          onclick="darValorCorrecta(event)"
        />
      </div>

      <div class="inputs">
        <input id="imagenOpcionC" type="file" accept=".jpg" onChange={cargarImg3} />
        <input
          id="opcionC"
          name="cambioCheck"
          type="radio"
          value="C"
          onclick="darValorCorrecta(event)"
        />
      </div>

      <div class="inputs">
        <input id="imagenOpcionD" type="file" accept=".jpg" onChange={cargarImg4} />
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
        <button onClick={handleSave}>Guardar pregunta</button>
        <button> Anterior</button>
        <button> Siguiente</button>
      </div>
</form>
  









</body>