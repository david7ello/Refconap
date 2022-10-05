import React from 'react'
import "./assets/global.css"; 
import { Link } from 'react-router-dom';

const Home = () => {
  return (
    <div className='app1'>
        <h1>¿Como quieres entrar?</h1>
        <Link to={"/maestros"}>
        <button>Profesor</button>
        </Link>
        <br/>
        <Link to={"/cuestionarios"}>
        <button>Alumno</button>
        </Link>
        <Link to={"/crear"}>
          <button>crear</button>
        </Link>
    </div>
  )
}

export default Home