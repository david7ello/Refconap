const preguntas = [
    {
        pregunta: "¿Cuál es el mejor lenguaje de programación?",
        opciones: [
          { textoRespuesta: "https://upload.wikimedia.org/wikipedia/commons/6/6a/JavaScript-logo.png", isCorrect: true },
          { textoRespuesta: "https://i0.wp.com/unaaldia.hispasec.com/wp-content/uploads/2019/09/Captura-de-pantalla-de-2019-09-07-04-06-35.png?fit=983%2C633&ssl=1", isCorrect: false },
          { textoRespuesta: "https://upload.wikimedia.org/wikipedia/commons/thumb/1/18/ISO_C%2B%2B_Logo.svg/1200px-ISO_C%2B%2B_Logo.svg.png", isCorrect: false },
          { textoRespuesta: "https://blog.sosafeapp.com/content/images/2020/04/blog---mi-primera-app-en-Kotlin.png", isCorrect: false },
        ],
      },
      {
        pregunta: "Con David aprendes de react...?",
        opciones: [
          { textoRespuesta: "sin contenido", isCorrect: false },
          { textoRespuesta: "sin relleno", isCorrect: true },
          { textoRespuesta: "sin gracia :v", isCorrect: false },
          { textoRespuesta: "sin código", isCorrect: false },
        ],
      },
      {
        pregunta: "¿Cuánto es `11`+ 1 en JavaScript?",
        opciones: [
          { textoRespuesta: "111", isCorrect: true },
          { textoRespuesta: "12", isCorrect: false },
          { textoRespuesta: "Syntax Error", isCorrect: false },
          { textoRespuesta: "`11`1", isCorrect: false },
        ],
      },
      {
        pregunta: "¿En qué año fue creado JavaScript?",
        opciones: [
          { textoRespuesta: "1997", isCorrect: false },
          { textoRespuesta: "2001", isCorrect: false },
          { textoRespuesta: "1987", isCorrect: false },
          { textoRespuesta: "1995", isCorrect: true },
        ],
      },
];

export default preguntas;