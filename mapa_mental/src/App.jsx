import React from 'react'
import AppRouter from './AppRouter'
import image from "./assets/images/REFCONAP.png"
import "./assets/global.css"


const App = () => {
  return (
    <div className='centrado'>
      <center >
        <img src={image} alt="" style={{width: "50%"}}/>
      </center>
      <AppRouter/>
    </div>

  )
}

export default App