import React, { useState } from "react";
import { useLocation } from "react-router-dom";
import "./assets/global.css";
import { Link } from "react-router-dom";
const crearPreguntas = () => {
  const { nombre, grupo } = useLocation().state;
  


  const [arrPregunta, setArrPregunta] = useState({
    actividad: nombre,
    curso: grupo,
    pregunta: "",
    correcta: "",
    img1: null,
    img2: null,
    img3: null,
    img4: null,
  });

  


  const handleSave = () => {
    var data = new FormData ();
    data.append("file1",arrPregunta.img1);
    data.append("file2",arrPregunta.img2);
    data.append("file3",arrPregunta.img3);
    data.append("file4",arrPregunta.img4);


    fetch("http://localhost:8000/imgApi.php",{
      method:"POST",
      body:data,
    })


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
      img1: e.target.files[0],
    }));
  };

  const cargarImg2 = (e) => {
    setArrPregunta((prev) => ({
      ...prev,
      img2: e.target.files[0],
    }));
  };

  const cargarImg3 = (e) => {
    setArrPregunta((prev) => ({
      ...prev,
      img3: e.target.files[0],
    }));
  };
  const cargarImg4 = (e) => {
    setArrPregunta((prev) => ({
      ...prev,
      img4: e.target.files[0],
    }));
  };

  return (
    <main className="appuno">
      <h2>{nombre}</h2>
      <h2>Escribe tu pregunta</h2>
      <input name="pregunta" type="text" onChange={handleChange} />
      <h2>Coloca tus imagenes</h2>
      <h2>Respuesta correcta es {arrPregunta.correcta}</h2>

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
        <Link to={"/crearActividad"}>
        <button>Cancelar</button>
        </Link>
        <button onClick={handleSave}>Guardar pregunta</button>
      </div>
    </main>
  );
};

export default crearPreguntas;
