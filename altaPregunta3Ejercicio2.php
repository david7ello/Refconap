
<h2>Escribe tu tercera pregunta</h2>
      <input id="pregunta" name="pregunta3" type="text" required/>
      
      <h2>Respuesta correcta es:</h2>
      <input id="inputRespuestaCorrecta3" name="respuestaCorrectaMostrada3" class="" required/>
      <span id="respuestaCorrectaMostrada3" name="respuestaCorrectaMostrada3">Ninguna</span> 

      <h2>Coloca tus imagenes</h2>
      <div class="inputs">
        <input id="imagenOpcionA" name="file1Pregunta3" type="file" accept=".jpg" required/>
        <input 
          id="opcionA"
          name="opcionPregunta3"
          type="radio"
          value="A"
          onclick="darValorCorrecta(event)"
        />
      </div>

      <div class="inputs">
        <input id="imagenOpcionB" name="file2Pregunta3" type="file" accept=".jpg"required />
        <input
          id="opcionB"
          name="opcionPregunta3"
          type="radio"
          value="B"
          onclick="darValorCorrecta(event)"
        />
      </div>

      <div class="inputs">
        <input id="imagenOpcionC" name="file3Pregunta3" type="file" accept=".jpg" required />
        <input
          id="opcionC"
          name="opcionPregunta3"
          type="radio"
          value="C"
          onclick="darValorCorrecta(event)"
        />
      </div>

      <div class="inputs">
        <input id="imagenOpcionD" name="file4Pregunta3" type="file" accept=".jpg" required/>
        <input
          id="opcionD"
          name="opcionPregunta3"
          type="radio"
          value="D"
          onclick="darValorCorrecta(event)"
        />
      </div>