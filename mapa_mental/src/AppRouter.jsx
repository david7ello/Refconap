import React from 'react';
import CrearPreguntas from "./CrearPreguntas";
import PreguntasSelect from "./PreguntasSelect";
import {Routes,Route} from "react-router-dom";
import NombreActividad from "./NombreActividad";
import { SeleccionarCurso } from './SeleccionarCurso';



const AppRouter = () => {
  return (
    <div>
        <Routes>
            <Route path='/altaEjercicioDos' element={<CrearPreguntas/>}/>
            <Route path='/resolverEjercicio2' element={<PreguntasSelect/>}/>
            <Route path='/crearActividad' element={<NombreActividad/>}/>
            <Route path='/seleccionCurso' element={<SeleccionarCurso/>}/>
        </Routes>
    </div>
  );
};

export default AppRouter