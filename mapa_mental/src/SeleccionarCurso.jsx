import React from 'react'
import "./assets/global.css"
import { Link } from 'react-router-dom'

export const SeleccionarCurso = () => {
  return (
    <div className='app'>
        <div>
            <h1>
                Selecciona tu curso
            </h1>
                <select>
                    <option>Selecciona un curso</option>
                </select>
                <br />
                <Link to={"/resolverEjercicio2"}>
                <button>Empezar cuestionario</button>
                </Link>
        </div>
        
    </div>
  )
}

