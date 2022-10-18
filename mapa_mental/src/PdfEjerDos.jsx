import React from "react";
import { jsPDF } from "jspdf";
import "./assets/global.css";



const PdfEjerDos = ({ preguntas,actividad,puntuacion,lineas }) => {
  const respuestaUno = preguntas[0].opciones[0].textoRespuesta;
  const respuestaDos = preguntas[1].opciones[1].textoRespuesta;
  const respuestaTres = preguntas[2].opciones[0].textoRespuesta;
  const respuestaCuatro = preguntas[3].opciones[1].textoRespuesta;
  const inclinados =lineas[0];
  const inclinados2 = lineas[1];

 

  const crearPdf = () => {
    const tamañoImg = {height:50, width:50}
    const tamañolineas={height:30, width:30}
    const doc = new jsPDF();
    doc.setFont("Arial", "normal");
      doc.setFontSize(36);
      doc.text (
        `
        ${actividad}
        `,65, 150
      );

    
    var img = new Image();
    img.src = respuestaUno;
    doc.addImage(img, "png", 30, 50, tamañoImg.height, tamañoImg.width);

    var linea1= new Image();
    linea1.src=inclinados;
    doc.addImage(linea1, "png", 50, 100, tamañolineas.height, tamañolineas.width);
    
    
    var img2 = new Image();
    img2.src = respuestaDos ;
    doc.addImage(img2, "png", 130, 50, tamañoImg.height, tamañoImg.width);
    var linea3= new Image();
    linea3.src=inclinados2;
    doc.addImage(linea3, "png",130, 100, tamañolineas.height, tamañolineas.width);

    var linea4= new Image();
    linea4.src=inclinados2;
    doc.addImage(linea4, "png",50, 180, tamañolineas.height, tamañolineas.width);
    
    var img3 = new Image();
    img3.src = respuestaTres;
    doc.addImage(img3, "png", 30, 200, tamañoImg.height, tamañoImg.width);
      
    var linea2= new Image();
    linea2.src=inclinados;
    doc.addImage(linea2, "png", 130, 180, tamañolineas.height, tamañolineas.width);
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
