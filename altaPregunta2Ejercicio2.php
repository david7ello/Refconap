
<script>
  
  let muestra2 = function(event){
    console.log(event.target.name)
    var img =""; 

    if(event.target.name==="file1Pregunta2"){
      img = document.getElementById("muestra2Img1");

    } if(event.target.name==="file2Pregunta2"){
      img = document.getElementById("muestra2Img2");

    } if(event.target.name==="file3Pregunta2"){
      img = document.getElementById("muestra2Img3");
    }
     if(event.target.name==="file4Pregunta2"){
      img = document.getElementById("muestra2Img4");
    }
    img.src=URL.createObjectURL(event.target.files[0])
    img.onload = function(){
      URL.revokeObjectURL(img.src)
    }
  }


</script>

<div class="escribe">
      <label>Escribe tu segunda pregunta</label>
      <textarea id="pregunta" name="pregunta2" type="text" required> </textarea>
</div>
      
      <label>Respuesta correcta es:</label>
      <input hidden id="inputRespuestaCorrecta2" name="respuestaCorrectaMostrada2" class="" required/>
      <span id="respuestaCorrectaMostrada2" name="respuestaCorrectaMostrada2">Ninguna</span> 

      <div class="inputs">
      <label class="btnSeleccionar">Subir imagen
        <input id="imagenOpcionA" name="file1Pregunta2" type="file" accept=".jpg" required onchange="muestra2(event)" />
        </label>
        <input 
          id="opcionA"
          name="opcionPregunta2"
          type="radio"
          value="A"
          onclick="darValorCorrecta(event)"
        />
        <img id="muestra2Img1" />
      </div>

      <div class="inputs">
      <label class="btnSeleccionar">Subir imagen
        <input id="imagenOpcionB" name="file2Pregunta2" type="file" accept=".jpg"required onchange="muestra2(event)"/>
        </label>
        <input
          id="opcionB"
          name="opcionPregunta2"
          type="radio"
          value="B"
          onclick="darValorCorrecta(event)"
        />
        <img id="muestra2Img2" />
      </div>

      <div class="inputs">
      <label class="btnSeleccionar">Subir imagen
        <input id="imagenOpcionC" name="file3Pregunta2" type="file" accept=".jpg" required onchange="muestra2(event)"/>
        </label>
        <input
          id="opcionC"
          name="opcionPregunta2"
          type="radio"
          value="C"
          onclick="darValorCorrecta(event)"
        />
        <img id="muestra2Img3" />
      </div>

      <div class="inputs">
      <label class="btnSeleccionar">Subir imagen
        <input id="imagenOpcionD" name="file4Pregunta2" type="file" accept=".jpg" required onchange="muestra2(event)"/>
        </label>
        <input
          id="opcionD"
          name="opcionPregunta2"
          type="radio"
          value="D"
          onclick="darValorCorrecta(event)"
        />
        <img id="muestra2Img4" />
      </div>