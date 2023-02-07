
<h2>Escribe tu pregunta</h2>
      <input id="pregunta" name="pregunta1" type="text" required/>
      
      <h2>Respuesta correcta es:</h2>
      <input id="inputRespuestaCorrecta1" name="respuestaCorrectaMostrada1" class="" required/>
      <span id="respuestaCorrectaMostrada1" name="respuestaCorrectaMostrada1">Ninguna</span> 

      <h2>Coloca tus imagenes</h2>
      <div class="inputs">
        <input id="imagenOpcionA" name="file1Pregunta1" type="file" accept=".jpg" required/>
        <input 
        id="opcionA"
          name="opcionPregunta1"
          type="radio"
          value="A"
          onclick="darValorCorrecta(event)"
        />
      </div>

      <div class="inputs">
        <input id="imagenOpcionB" name="file2Pregunta1" type="file" accept=".jpg"required />
        <input
          id="opcionB"
          name="opcionPregunta1"
          type="radio"
          value="B"
          onclick="darValorCorrecta(event)"
        />
      </div>

      <div class="inputs">
        <input id="imagenOpcionC" name="file3Pregunta1" type="file" accept=".jpg" required />
        <input
          id="opcionC"
          name="opcionPregunta1"
          type="radio"
          value="C"
          onclick="darValorCorrecta(event)"
        />
      </div>

      <div class="inputs">
        <input id="imagenOpcionD" name="file4Pregunta1" type="file" accept=".jpg" required/>
        <input
          id="opcionD"
          name="opcionPregunta1"
          type="radio"
          value="D"
          onclick="darValorCorrecta(event)"
        />
      </div>