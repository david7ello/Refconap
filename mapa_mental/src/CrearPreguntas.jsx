import React, { useState } from "react";
import "./assets/global.css";
const crearPreguntas = () => {
  const [cambioCheck, setCambioCheck] = useState();
  const [pregunta, setPregunta] = useState("");
  const [img1, setImg1] = useState();
  const [img2, setImg2] = useState();
  const [img3, setImg3] = useState();
  const [img4, setImg4] = useState();

  const [arrPregunta, setArrPregunta] = useState({
    pregunta: "",
    respuestaCorrecta: "",
    img1: null,
    img2: null,
    img3: null,
    img4: null,
  });

  const handleSave = () => {
    fetch("httpl://localhost:8000/api.php", {
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
    setCambioCheck(e.target.value);
    setArrPregunta((prev) => ({
      ...prev,
      respuestaCorrecta: e.target.value,
    }));
  };

  const cargarImg1 = (e) => {
    setImg1(e.target.files);
  };

  const cargarImg2 = (e) => {
    setImg2(e.target.files);
  };

  const cargarImg3 = (e) => {
    setImg3(e.target.files);
  };
  const cargarImg4 = (e) => {
    setImg4(e.target.files);
  };

  console.log(img1);

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
