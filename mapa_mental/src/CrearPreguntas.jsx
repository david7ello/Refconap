import React, { useState } from "react";
import "./assets/global.css";
const crearPreguntas = () => {
  
  const [arrPregunta, setArrPregunta] = useState({
    pregunta: "",
    correcta: "",
    img1: null,
    img2: null,
    img3: null,
    img4: null,
  });
  console.log(arrPregunta.respuestaCorrecta);
  const handleSave = () => {
    fetch("http://localhost:8000/api.php", {
      method: "POST",
      headers: {
        "Content-type": "application/json",
      },
      body: JSON.stringify(arrPregunta),
    })
      .then((response) => response.json())
      .then((data) => {
        console.log(data);
      });
  };

  const handleChange = (e) => {
    e.persist;
    setArrPregunta((prev) => ({
      ...prev,
      [e.target.name]: e.target.value,
    }));
  };

  const respuestaCorrecta = (e) => {
    setArrPregunta((prev) => ({
      ...prev,
      correcta: e.target.value,
    }));
  };

  const cargarImg1 = (e) => {
    setArrPregunta((prev) => ({
      ...prev,
      img1: e.target.files,
    }));
  };

  const cargarImg2 = (e) => {
    setArrPregunta((prev) => ({
      ...prev,
      img2: e.target.files,
    }));
  };

  const cargarImg3 = (e) => {
    setArrPregunta((prev) => ({
      ...prev,
      img3: e.target.files,
    }));
  };
  const cargarImg4 = (e) => {
    setArrPregunta((prev) => ({
      ...prev,
      img4: e.target.files,
    }));
  };

  return (
    <main className="appuno">
      <h1>Escribe tu pregunta</h1>
      <input name="pregunta" type="text" onChange={handleChange} />
      <h1>Coloca tus imagenes</h1>
      <h1>Respuesta correcta es {arrPregunta.respuestaCorrecta}</h1>

      <div className="inputs">
        <input type="file" accept=".jpg" onChange={cargarImg1} />
        <input
          name="cambioCheck"
          type="radio"
          value="A"
          onClick={respuestaCorrecta}
        />
      </div>

      <div className="inputs">
        <input type="file" accept=".jpg" onChange={cargarImg2} />
        <input
          name="cambioCheck"
          type="radio"
          value="B"
          onClick={respuestaCorrecta}
        />
      </div>

      <div className="inputs">
        <input type="file" accept=".jpg" onChange={cargarImg3} />
        <input
          name="cambioCheck"
          type="radio"
          value="C"
          onClick={respuestaCorrecta}
        />
      </div>

      <div className="inputs">
        <input type="file" accept=".jpg" onChange={cargarImg4} />
        <input
          name="cambioCheck"
          type="radio"
          value="D"
          onClick={respuestaCorrecta}
        />
      </div>

      <div className="siguiente">
        <button>Siguiente pregunta</button>
        <button onClick={handleSave}>Guardar ejercicio</button>
      </div>
    </main>
  );
};

export default crearPreguntas;
