
<script>
  
  let muestra3 = function(event){
    console.log(event.target.name)
    var img =""; 

    if(event.target.name==="file1Pregunta3"){
      img = document.getElementById("muestra3Img1");

    } if(event.target.name==="file2Pregunta3"){
      img = document.getElementById("muestra3Img2");

    } if(event.target.name==="file3Pregunta3"){
      img = document.getElementById("muestra3Img3");
    }
     if(event.target.name==="file4Pregunta3"){
      img = document.getElementById("muestra3Img4");
    }
    img.src=URL.createObjectURL(event.target.files[0])
    img.onload = function(){
      URL.revokeObjectURL(img.src)
    }
  }


</script>

<div class="escribe">
      <label>Escribe tu tercera pregunta</label>
      <textarea id="pregunta" name="pregunta3" type="text" required> </textarea>
</div>
      
      <label>Respuesta correcta es:</label>
      <input hidden id="inputRespuestaCorrecta3" name="respuestaCorrectaMostrada3" class="" required/>
      <span id="respuestaCorrectaMostrada3" name="respuestaCorrectaMostrada3">Ninguna</span> 

      
      <div class="inputs">
      <label class="btnSeleccionar">Subir imagen
        <input id="imagenOpcionA" name="file1Pregunta3" type="file" accept=".jpg" required onchange="muestra3(event)"/>
        </label>
        <input 
          id="opcionA"
          name="opcionPregunta3"
          type="radio"
          value="A"
          onclick="darValorCorrecta(event)"
        />
        <img id="muestra3Img1" />
      </div>

      <div class="inputs">
      <label class="btnSeleccionar">Subir imagen
        <input id="imagenOpcionB" name="file2Pregunta3" type="file" accept=".jpg"required onchange="muestra3(event)"/>
        </label>
        <input
          id="opcionB"
          name="opcionPregunta3"
          type="radio"
          value="B"
          onclick="darValorCorrecta(event)"
        />
        <img id="muestra3Img2" />
      </div>

      <div class="inputs">
      <label class="btnSeleccionar">Subir imagen
        <input id="imagenOpcionC" name="file3Pregunta3" type="file" accept=".jpg" required onchange="muestra3(event)"/>
        </label>
        <input
          id="opcionC"
          name="opcionPregunta3"
          type="radio"
          value="C"
          onclick="darValorCorrecta(event)"
        />
        <img id="muestra3Img3" />
      </div>

      <div class="inputs">
      <label class="btnSeleccionar">Subir imagen
        <input id="imagenOpcionD" name="file4Pregunta3" type="file" accept=".jpg" required onchange="muestra3(event)"/>
        </label>
        <input
          id="opcionD"
          name="opcionPregunta3"
          type="radio"
          value="D"
          onclick="darValorCorrecta(event)"
        />
        <img id="muestra3Img4" />
      </div>