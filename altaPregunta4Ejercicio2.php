
<script>
  
  let muestra4 = function(event){
    console.log(event.target.name)
    var img =""; 

    if(event.target.name==="file1Pregunta4"){
      img = document.getElementById("muestra4Img1");

    } if(event.target.name==="file2Pregunta4"){
      img = document.getElementById("muestra4Img2");

    } if(event.target.name==="file3Pregunta4"){
      img = document.getElementById("muestra4Img3");
    }
     if(event.target.name==="file4Pregunta4"){
      img = document.getElementById("muestra4Img4");
    }
    img.src=URL.createObjectURL(event.target.files[0])
    img.onload = function(){
      URL.revokeObjectURL(img.src)
    }
  }

</script>

<div class="escribe">
      <label>Escribe tu cuarta pregunta</label>
      <textarea id="pregunta" name="pregunta4" type="text" required> </textarea>
</div>
      
      <label>Respuesta correcta es:</label>
      <input hidden id="inputRespuestaCorrecta4" name="respuestaCorrectaMostrada4" class="" required/>
      <span id="respuestaCorrectaMostrada4" name="respuestaCorrectaMostrada4">Ninguna</span> 

      <div class="inputs">
      <label class="btnSeleccionar">Subir imagen
        <input id="imagenOpcionA" name="file1Pregunta4" type="file" accept=".jpg" required onchange="muestra4(event)"/>
        </label>
        <input 
          id="opcionA"
          name="opcionPregunta4"
          type="radio"
          value="A"
          onclick="darValorCorrecta(event)"
        />
        <img id="muestra4Img1" />
      </div>

      <div class="inputs">
      <label class="btnSeleccionar">Subir imagen
        <input id="imagenOpcionB" name="file2Pregunta4" type="file" accept=".jpg"required onchange="muestra4(event)"/>
        </label>
        <input
          id="opcionB"
          name="opcionPregunta4"
          type="radio"
          value="B"
          onclick="darValorCorrecta(event)"
        />
        <img id="muestra4Img2" />
      </div>

      <div class="inputs">
      <label class="btnSeleccionar">Subir imagen
        <input id="imagenOpcionC" name="file3Pregunta4" type="file" accept=".jpg" required onchange="muestra4(event)"/>
        </label>
        <input
          id="opcionC"
          name="opcionPregunta4"
          type="radio"
          value="C"
          onclick="darValorCorrecta(event)"
        />
        <img id="muestra4Img3" />
      </div>

      <div class="inputs">
      <label class="btnSeleccionar">Subir imagen
        <input id="imagenOpcionD" name="file4Pregunta4" type="file" accept=".jpg" required onchange="muestra4(event)"/>
        </label>
        <input
          id="opcionD"
          name="opcionPregunta4"
          type="radio"
          value="D"
          onclick="darValorCorrecta(event)"
        />
        <img id="muestra4Img4" />
      </div>