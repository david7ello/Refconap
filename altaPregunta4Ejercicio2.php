
<h2>Escribe tu cuarta pregunta</h2>
      <input id="pregunta" name="pregunta4" type="text" required/>
      
      <h2>Respuesta correcta es:</h2>
      <input id="inputRespuestaCorrecta4" name="respuestaCorrectaMostrada4" class="" required/>
      <span id="respuestaCorrectaMostrada4" name="respuestaCorrectaMostrada4">Ninguna</span> 

      <h2>Coloca tus imagenes</h2>
      <div class="inputs">
        <input id="imagenOpcionA" name="file1Pregunta4" type="file" accept=".jpg" required/>
        <input 
          id="opcionA"
          name="opcionPregunta4"
          type="radio"
          value="A"
          onclick="darValorCorrecta(event)"
        />
      </div>

      <div class="inputs">
        <input id="imagenOpcionB" name="file2Pregunta4" type="file" accept=".jpg"required />
        <input
          id="opcionB"
          name="opcionPregunta4"
          type="radio"
          value="B"
          onclick="darValorCorrecta(event)"
        />
      </div>

      <div class="inputs">
        <input id="imagenOpcionC" name="file3Pregunta4" type="file" accept=".jpg" required />
        <input
          id="opcionC"
          name="opcionPregunta4"
          type="radio"
          value="C"
          onclick="darValorCorrecta(event)"
        />
      </div>

      <div class="inputs">
        <input id="imagenOpcionD" name="file4Pregunta4" type="file" accept=".jpg" required/>
        <input
          id="opcionD"
          name="opcionPregunta4"
          type="radio"
          value="D"
          onclick="darValorCorrecta(event)"
        />
      </div>