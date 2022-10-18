import React from "react";
import { jsPDF } from "jspdf";
import "./assets/global.css";


const PdfEjerDos = ({ preguntas,actividad,puntuacion }) => {
  const respuestaUno = preguntas[0].opciones[0].textoRespuesta;
  const respuestaDos = preguntas[0].opciones[0].textoRespuesta;
  const respuestaTres = preguntas[0].opciones[0].textoRespuesta;
  const respuestaCuatro = preguntas[0].opciones[0].textoRespuesta;
 

  const crearPdf = () => {
    const tamañoImg = {height:50, width:50}
    const doc = new jsPDF();
    doc.setFont("Arial", "normal");
      doc.setFontSize(36);
      doc.text (
        `
        ${actividad}
        `,50, 150
      );

    
    var img = new Image();
    img.src = respuestaUno;
    doc.addImage(img, "png", 30, 50, tamañoImg.height, tamañoImg.width);
    
    var img2 = new Image();
    img2.src = respuestaDos ;
    doc.addImage(img2, "png", 130, 50, tamañoImg.height, tamañoImg.width);
    
    var img3 = new Image();
    img3.src = respuestaTres;
    doc.addImage(img3, "png", 30, 200, tamañoImg.height, tamañoImg.width);

    var img4 = new Image();
    img4.src = respuestaCuatro;
    doc.addImage(img4, "png", 130, 200, tamañoImg.height, tamañoImg.width);

    doc.save(`mapa mental.pdf`);
  };
  
  return (
    <div>
      <button onClick={crearPdf}>Generar PDF</button>
    </div>
  );
};

export default PdfEjerDos;
