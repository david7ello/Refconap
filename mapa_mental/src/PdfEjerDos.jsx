import React from 'react'
import {jsPDF} from 'jspdf'
import "./assets/global.css"



const PdfEjerDos = () => {

  const crearPdf=()=>{
    const doc = new jsPDF;
    doc.setFont("Arial", "normal");
      doc.setFontSize(10);
      doc.text(`Respuestas:
      img1:
      img2:
      img:3
      img:4
      `
      , 20, 30);
      var img= new Image()
      img.src = 'https://upload.wikimedia.org/wikipedia/commons/6/6a/JavaScript-logo.png'
      doc.addImage(img,'png', 15,15)
      doc.save(`mapa mental.pdf`)
    }

    

  return (
    <div>
      <button onClick={crearPdf}>Generar PDF</button>
    </div>
 
  )
}

export default PdfEjerDos