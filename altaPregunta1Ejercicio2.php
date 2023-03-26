
<script>
  
  let muestra1 = function(event){
    console.log(event.target.name)
    var img =""; 

    if(event.target.name==="file1Pregunta1"){
      img = document.getElementById("muestra1Img1");

    } if(event.target.name==="file2Pregunta1"){
      img = document.getElementById("muestra1Img2");

    } if(event.target.name==="file3Pregunta1"){
      img = document.getElementById("muestra1Img3");
    }
     if(event.target.name==="file4Pregunta1"){
      img = document.getElementById("muestra1Img4");
    }
    img.src=URL.createObjectURL(event.target.files[0])
    img.onload = function(){
      URL.revokeObjectURL(img.src)
    }
  }


</script>

<div class="escribe">
<label>Escribe tu primera pregunta</label>
      <textarea class="preguntas" id="pregunta" name="pregunta1" type="text" required> </textarea>
</div>

      <div>
      <label>Respuesta correcta es:</label>
      <input hidden id="inputRespuestaCorrecta1" name="respuestaCorrectaMostrada1" class="" required/>
      <span id="respuestaCorrectaMostrada1" name="respuestaCorrectaMostrada1">Ninguna</span> 
      </div>

      <div>
      
      <div class="inputs">
      <label class="btnSeleccionar">Subir imagen
        <input id="imagenOpcionA" name="file1Pregunta1" type="file" accept=".jpg" required onchange="muestra1(event)"/>
        </label>
        <input 
          id="opcionA"
          name="opcionPregunta1"
          type="radio"
          value="A"
          onclick="darValorCorrecta(event)"
        />
        <img id="muestra1Img1" />

      </div>

      <div class="inputs">
      <label class="btnSeleccionar">Subir imagen
        <input id="imagenOpcionB" name="file2Pregunta1" type="file" accept=".jpg"required onchange="muestra1(event)"/>
        </label>
        <input
          id="opcionB"
          name="opcionPregunta1"
          type="radio"
          value="B"
          onclick="darValorCorrecta(event)"
        />
        <img id="muestra1Img2" />
      </div>

      <div class="inputs">
      <label class="btnSeleccionar">Subir imagen
        <input id="imagenOpcionC" name="file3Pregunta1" type="file" accept=".jpg" required onchange="muestra1(event)" />
        </label>
        <input
          id="opcionC"
          name="opcionPregunta1"
          type="radio"
          value="C"
          onclick="darValorCorrecta(event)"
        />
        <img id="muestra1Img3" />
      </div>

      <div class="inputs">
      <label class="btnSeleccionar">Subir imagen
        <input id="imagenOpcionD" name="file4Pregunta1" type="file" accept=".jpg" required onchange="muestra1(event)"/>
      </label>
        <input
          id="opcionD"
          name="opcionPregunta1"
          type="radio"
          value="D"
          onclick="darValorCorrecta(event)"
        />
        <img id="muestra1Img4" />
      </div>
</div>