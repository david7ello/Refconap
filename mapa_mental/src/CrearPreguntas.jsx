import React, {useState} from 'react'
import "./assets/global.css";

const crearPreguntas = () => {
    const [cambioCheck, setCambioCheck] = useState()
    const [pregunta,setPregunta] = useState("")
    const [img1,setImg1] = useState()
    const [img2,setImg2] = useState()
    const [img3,setImg3] = useState()
    const [img4,setImg4] = useState()

    const handleChange=e=>{
        setCambioCheck(e.target.value)
        setPregunta(e.target.value)
        }
    

    const cargarImg1=(e)=>{
        setImg1(e.target.value)
        setImg2(e.target.value)
        setImg3(e.target.value)
        setImg4(e.target.value)
    }

    const cargarImg2=(e)=>{
        setImg1(e.target.value)
        setImg2(e.target.value)
        setImg3(e.target.value)
        setImg4(e.target.value)
    }

    console.log();


  return (
    <main className='appuno'>
        <h1>Escribe tu pregunta</h1>
        <input type="text" onChange={handleChange}/>
        <h1>Coloca tus imagenes</h1>
        <h1>Respuesta correcta es {cambioCheck}</h1>
        
            <div className='inputs'>
                <input type="file" accept=".jpg" onChange={cargarImg1}/>
                <input name="cambioCheck" type="radio" value="A" onChange={handleChange} onClick={handleChange}/> 
            </div>

            <div className='inputs'>
                <input type="file" accept=".jpg" />
                <input name="cambioCheck" type="radio" value="B" onChange={handleChange} onClick={handleChange} /> 
            </div>

            <div className='inputs'>
                <input type="file" accept=".jpg" />
                <input name="cambioCheck" type="radio" value="C" onChange={handleChange} onClick={handleChange} /> 
            </div>

            <div className='inputs'>
                <input type="file" accept=".jpg" />
                <input name="cambioCheck" type="radio" value="D" onChange={handleChange} onClick={handleChange}/> 
            </div>
        
            <div className='siguiente'>
                <button>Siguiente pregunta</button>
                <button>Guardar ejercicio</button>
            </div>




    </main>
  
  )
}

export default crearPreguntas