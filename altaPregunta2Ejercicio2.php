
<h2>Escribe tu segunda pregunta</h2>
      <input id="pregunta" name="pregunta2" type="text" required/>
      
      <h2>Respuesta correcta es:</h2>
      <input id="inputRespuestaCorrecta2" name="respuestaCorrectaMostrada2" class="" required/>
      <span id="respuestaCorrectaMostrada2" name="respuestaCorrectaMostrada2">Ninguna</span> 

      <h2>Coloca tus imagenes</h2>
      <div class="inputs">
        <input id="imagenOpcionA" name="file1Pregunta2" type="file" accept=".jpg" required/>
        <input 
          id="opcionA"
          name="opcionPregunta2"
          type="radio"
          value="A"
          onclick="darValorCorrecta(event)"
        />
      </div>

      <div class="inputs">
        <input id="imagenOpcionB" name="file2Pregunta2" type="file" accept=".jpg"required />
        <input
          id="opcionB"
          name="opcionPregunta2"
          type="radio"
          value="B"
          onclick="darValorCorrecta(event)"
        />
      </div>

      <div class="inputs">
        <input id="imagenOpcionC" name="file3Pregunta2" type="file" accept=".jpg" required />
        <input
          id="opcionC"
          name="opcionPregunta2"
          type="radio"
          value="C"
          onclick="darValorCorrecta(event)"
        />
      </div>

      <div class="inputs">
        <input id="imagenOpcionD" name="file4Pregunta2" type="file" accept=".jpg" required/>
        <input
          id="opcionD"
          name="opcionPregunta2"
          type="radio"
          value="D"
          onclick="darValorCorrecta(event)"
        />
      </div>