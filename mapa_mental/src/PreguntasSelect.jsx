import React, {useState} from 'react';
import { useEffect } from 'react';
import "./assets/global.css";
import preguntas from './preguntas';


const PreguntasSelect = () => {
    const [preguntaActual, setPreguntaActual] = useState(0);
    const [puntuacion, setPuntacion] = useState(0);
    const [isFinished, setisFinished] = useState(false);
    const [tiempoRestante, setTiempoRestante] = useState(10);
    const [areDisable, setAreDisable] = useState(false);
    const [mostrarCorrectas,setMostrarCorrectas] = useState(false);

    function siguientePregunta(isCorrect,e){
        //añadir puntos
        if (isCorrect) setPuntacion(puntuacion+1);
        
        //añadir estilos
        e.target.classList.add(isCorrect ?"correct":"incorrect");
    
        //cambiar a la siguiente pregunta
        setTimeout(()=>{ if(preguntaActual===preguntas.length-1){
          setisFinished(true)
        } else{
          setPreguntaActual(preguntaActual+1)
        }},1000);
      }
    
      useEffect(() => {
        const interval=setInterval(()=>{
          if(tiempoRestante>0) setTiempoRestante((prev)=>prev-1)
          if(tiempoRestante===0)setAreDisable(true)
        },1000);
    
        return()=> clearInterval(interval);
      }, [tiempoRestante]);
      
    if(isFinished)
    return(
        <main className='app'>
          <div className='juego-terminado'>
            <span>Obtuviste {puntuacion} de {preguntas.length}</span>
            <button onClick={()=>window.location.href="/"}>Volver a jugar</button>
            <button>Generar PDF</button>
            <button onClick={()=>{
              setisFinished(false);
              setMostrarCorrectas(true);
              setPreguntaActual(0);
    
            }}>Ver respuestas</button>
    
          </div>
        </main>
      );

if (mostrarCorrectas)
  return (
<main className="app">
          <div className="lado-izquierdo">
            <div className="numero-pregunta">
              <span>Pregunta {preguntaActual + 1} de</span> {preguntas.length}
            </div>
            <div className="titulo-pregunta">
              {preguntas[preguntaActual].pregunta}
            </div>
            <div>
              {
                preguntas[preguntaActual].opciones.filter(
                  (opcion) => opcion.isCorrect
                )[0].textoRespuesta
              }
            </div>
  
            <button
              onClick={() => {
                if (preguntaActual === preguntas.length - 1) {
                  setIsFinished(true);
                } else {
                  setPreguntaActual(preguntaActual + 1);
                }
              }}
            >
              Continuar
            </button>
          </div>
        </main>
  );

return (
    <main className="app">
        <div className="lado-izquierdo">
          <div className="numero-pregunta">
            <span>Pregunta {preguntaActual + 1} de</span> {preguntas.length}
          </div>
          <div className="titulo-pregunta">
            {preguntas[preguntaActual].pregunta}
          </div>
          <div>
            {!areDisable ? (
              <span className="tiempo-restante">
                Tiempo restate:{tiempoRestante}
              </span>
            ) : (
              <button
                onClick={() => {
                  setTiempoRestante(10);
                  setAreDisable(false);
                  setPreguntaActual(preguntaActual + 1);
                }}
              >
                Continuar
              </button>
            )}
          </div>
        </div>
  
        <div className="lado-derecho">
          {preguntas[preguntaActual].opciones.map((respuestas, index) => (
            <button
              disabled={areDisable}
              key={respuestas.textoRespuesta}
              onClick={(e) => siguientePregunta(respuestas.isCorrect, e)}
            >
              <img src={respuestas.textoRespuesta} alt=""  />
            </button>
          ))}
        </div>
       
      </main>
)






}

export default PreguntasSelect