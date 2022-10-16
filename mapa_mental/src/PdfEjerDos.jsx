import React from "react";
import { jsPDF } from "jspdf";
import "./assets/global.css";

const PdfEjerDos = ({ preguntas }) => {
  const respuestaUno = preguntas[0].opciones[0].textoRespuesta;
  const crearPdf = () => {
    const doc = new jsPDF();
    doc.setFont("Arial", "normal");
    doc.setFontSize(10);
    doc.text(
      `Respuestas:
      img1:
      img2:
      img3:
      img4:
      `,
      20,
      30
    );
    var img = new Image();
    img.src = respuestaUno;
    doc.addImage(img, "png", 15, 15);
    doc.save(`mapa mental.pdf`);
  };

  return (
    <div>
      <button onClick={crearPdf}>Generar PDF</button>
    </div>
  );
};

export default PdfEjerDos;
