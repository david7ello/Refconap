import React from 'react'
import "./assets/global.css"; 
import { Link } from 'react-router-dom';

const Home = () => {
  return (
    <div className='app'>
        <div className='app1'>

        <h1>¿Como quieres entrar?</h1>
        <Link to={"/crearActividad"}>
        <button>Profesor</button>
        </Link>
        <br/>
        <Link to={"/seleccionCurso"}>
        <button>Alumno</button>
        </Link>
        <Link to={"/crear"}>
          <button>crear</button>
        </Link>
        </div>
    </div>
  )
}

export default Home