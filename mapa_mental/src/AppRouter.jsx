import React from 'react';
import CrearPreguntas from "./CrearPreguntas";
import PreguntasSelect from "./PreguntasSelect";
import {Routes,Route} from "react-router-dom";
import NombreActividad from "./NombreActividad";
import { SeleccionarCurso } from './SeleccionarCurso';
import Home from "./Home"
import PdfEjerDos from './PdfEjerDos';



const AppRouter = () => {
  return (
    <div>
        <Routes>
        <Route path='/' element={<Home/>}/>
            <Route path='/altaEjercicioDos' element={<CrearPreguntas/>}/>
            <Route path='/resolverEjercicio2' element={<PreguntasSelect/>}/>
            <Route path='/crearActividad' element={<NombreActividad/>}/>
            <Route path='/seleccionCurso' element={<SeleccionarCurso/>}/>
            <Route path='/pdfEjercicioDos' element={<PdfEjerDos/>}/>
        </Routes>
    </div>
  );
};

export default AppRouter