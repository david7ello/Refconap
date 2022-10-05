import React, { useEffect, useState} from 'react';
import "./assets/global.css";
import { Link } from 'react-router-dom';


const NombreActividad = () => {
  const [data, setData] = useState();
  const [cambioGrupo, setCambioGrupo] = useState("");
  const [nombreAct, setNombreAct] = useState("")
  const [isLoading, setIsLoading] = useState(true);
 
  console.log(cambioGrupo)
  console.log(nombreAct)
  useEffect(() => {
    fetch("https://cliente.casafintech.com/propiedad")
      .then((response) => response.json())
      .then((data) =>{
        setData(data)
        setIsLoading(false)
      } );
  }, []);
  
  const  handleChange=(e)=>{
    setNombreAct(e.target.value)
  }

  const selectGrupp =(e)=>{
    setCambioGrupo(e.target.value)
  }
 
  if (isLoading===true) { // ⬅️ si está cargando, mostramos un texto que lo indique
    return (
      <div>
        <h1>Cargando...</h1>
      </div>
    );
  }

  return (
    <div className="app">
      <div>
        <h1>Nombre Actividad</h1>
        <input type="text" onChange={handleChange}></input>
        <h1>Selecciona el grupo</h1>
        <select onChange={selectGrupp}>
          <option>selecciona tu grupo</option>
          {data.map((item,index)=>{
            return(
              <option key={index + 1} value={item.name}>{item.name}</option>
            )
          })}
        </select>
        <br />
        <Link to={"/altaEjercicioDos"}>
          <button>Crear Cuestionario</button>
        </Link>
      </div>
    </div>
  );
};

export default NombreActividad;