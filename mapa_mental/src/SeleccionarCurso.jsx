import React,{useEffect,useState} from 'react'
import "./assets/global.css"
import { Link } from 'react-router-dom'

export const SeleccionarCurso = () => {
  const [data, setData] = useState()
  const [isLoading, setIsLoading] = useState(true)
  const [cambioGrupo, setCambioGrupo] = useState("")
  useEffect(() => {
    fetch("http://localhost:8000/api.php")
      .then((response) => response.json())
      .then((data) =>{
        setData(data)
        setIsLoading(false)
      } );
  }, []);
  console.log(data)

  const selectGrupp = (e) => {
    setCambioGrupo(e.target.value);
  };
  if (isLoading === true) {
    // ⬅️ si está cargando, mostramos un texto que lo indique
    return (
      <div className='app'>
        <h1>Cargando...</h1>
      </div>
    );
  }
  return (
    <div className='app'>
        <div>
            <h1>
                Selecciona tu curso
            </h1>
            <select onChange={selectGrupp}>
          <option>selecciona tu grupo</option>
          {data.map((item, index) => {
            return (
              <option key={index + 1} value={item.nombre}>
                {item.nombre}
              </option>
            );
          })}
        </select>
                <br />
                <Link to={"/resolverEjercicio2"}>
                <button>Empezar cuestionario</button>
                </Link>
        </div>
        
    </div>
  )
}

