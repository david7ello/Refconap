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
        pregunta: "El siguiente animal es un perro",
        opciones: [
          { textoRespuesta: "https://www.google.com.mx/url?sa=i&url=https%3A%2F%2Fconcepto.de%2Fleon%2F&psig=AOvVaw0EUvOrILJqG6_2fNcZsRgn&ust=1666153136561000&source=images&cd=vfe&ved=0CA4QjRxqFwoTCKCazrD26PoCFQAAAAAdAAAAABAD", isCorrect: false },
          { textoRespuesta: "https://www.adobe.com/es/express/feature/image/media_16ad2258cac6171d66942b13b8cd4839f0b6be6f3.png?width=2000&format=webply&optimize=mediumQ", isCorrect: true },
          { textoRespuesta: "https://www.google.com.mx/imgres?imgurl=http%3A%2F%2Fwww.infotigres.com%2FImagenes%2Ffotos-bonitas-de-tigres.jpg&imgrefurl=https%3A%2F%2Fwww.infotigres.com%2Fimagenes-fotos-bonitas-de-tigres-jpg&tbnid=FshPJy4VvJ7KZM&vet=12ahUKEwi8ob_T9uj6AhXCUt8KHRXYBP4QMygIegUIARDMAQ..i&docid=AlNXYeF9vP8JsM&w=1200&h=750&q=tigre%20jpg&hl=es&authuser=0&ved=2ahUKEwi8ob_T9uj6AhXCUt8KHRXYBP4QMygIegUIARDMAQ", isCorrect: false },
          { textoRespuesta: "https://www.google.com.mx/imgres?imgurl=https%3A%2F%2Fconcepto.de%2Fwp-content%2Fuploads%2F2021%2F07%2Felefante-e1626649741618.jpg&imgrefurl=https%3A%2F%2Fconcepto.de%2Felefante%2F&tbnid=p9ht-yy-zh4pgM&vet=12ahUKEwiiq9no9uj6AhUWDd8KHW8ZBTcQMygCegUIARDpAQ..i&docid=CKX-pbzE7pilXM&w=800&h=400&q=elefante&hl=es&authuser=0&ved=2ahUKEwiiq9no9uj6AhUWDd8KHW8ZBTcQMygCegUIARDpAQ", isCorrect: false },
        ],
      },
      {
        pregunta: "¿Cuánto es `11`+ 1 en JavaScript?",
        opciones: [
          { textoRespuesta: "https://www.google.com.mx/imgres?imgurl=https%3A%2F%2Fupload.wikimedia.org%2Fwikipedia%2Fcommons%2Fthumb%2Fb%2Fb0%2FMA_Route_111.svg%2F1280px-MA_Route_111.svg.png&imgrefurl=https%3A%2F%2Fes.m.wikipedia.org%2Fwiki%2FArchivo%3AMA_Route_111.svg&tbnid=ar1IjERohffirM&vet=12ahUKEwiKwqvz9uj6AhVtxykDHZ5KCQQQMygBegUIARCPAQ..i&docid=QbZvluEFGbTXkM&w=1280&h=1024&q=111&hl=es&authuser=0&ved=2ahUKEwiKwqvz9uj6AhVtxykDHZ5KCQQQMygBegUIARCPAQ", isCorrect: true },
          { textoRespuesta: "https://www.google.com.mx/imgres?imgurl=https%3A%2F%2Fupload.wikimedia.org%2Fwikipedia%2Fcommons%2Fthumb%2Fa%2Fac%2FIOS_12_logo.svg%2F1200px-IOS_12_logo.svg.png&imgrefurl=https%3A%2F%2Fes.wikipedia.org%2Fwiki%2FIOS_12&tbnid=s7YgCvW3v-HY6M&vet=12ahUKEwiq6vmC9-j6AhXbmmoFHcCpDVgQMygAegUIARCMAQ..i&docid=Dfj5QFFBy7xvRM&w=1200&h=1212&q=12&hl=es&authuser=0&ved=2ahUKEwiq6vmC9-j6AhXbmmoFHcCpDVgQMygAegUIARCMAQ", isCorrect: false },
          { textoRespuesta: "https://www.google.com.mx/imgres?imgurl=https%3A%2F%2Fi1.sndcdn.com%2Favatars-SgxyqzprOd3lx5PL-ob48yg-t500x500.jpg&imgrefurl=https%3A%2F%2Fsoundcloud.com%2Fuser-651459619&tbnid=5ufhpQMs8cv0pM&vet=12ahUKEwio0LyL9-j6AhUnj2oFHf9tC4YQMygOegUIARDlAQ..i&docid=YH7z0yJSct7CIM&w=500&h=500&q=sintax%20error&hl=es&authuser=0&ved=2ahUKEwio0LyL9-j6AhUnj2oFHf9tC4YQMygOegUIARDlAQ", isCorrect: false },
          { textoRespuesta: "`https://www.google.com.mx/imgres?imgurl=https%3A%2F%2Fupload.wikimedia.org%2Fwikipedia%2Fcommons%2Fthumb%2F8%2F84%2FMA_Route_21.svg%2F1024px-MA_Route_21.svg.png&imgrefurl=https%3A%2F%2Fes.m.wikipedia.org%2Fwiki%2FArchivo%3AMA_Route_21.svg&tbnid=4STUQo7Er74VHM&vet=12ahUKEwi166Cj9-j6AhVqyCkDHdfOAu0QMygAegUIARCRAQ..i&docid=0FadA5OrEP3PAM&w=1024&h=1024&q=21&hl=es&authuser=0&ved=2ahUKEwi166Cj9-j6AhVqyCkDHdfOAu0QMygAegUIARCRAQ", isCorrect: false },
        ],
      },
      {
        pregunta: "¿En qué año fue creado JavaScript?",
        opciones: [
          { textoRespuesta: "https://www.google.com.mx/imgres?imgurl=https%3A%2F%2Fimage.shutterstock.com%2Fimage-illustration%2Fgolden-3d-number-1997-year-260nw-2112618188.jpg&imgrefurl=https%3A%2F%2Fwww.shutterstock.com%2Fes%2Fsearch%2F1997&tbnid=yhOHYhMSl_nImM&vet=12ahUKEwjDyPyt9-j6AhX0xykDHVrUC9wQMygAegUIARCQAQ..i&docid=_LNFNfSOZHgocM&w=390&h=280&q=1997&hl=es&authuser=0&ved=2ahUKEwjDyPyt9-j6AhX0xykDHVrUC9wQMygAegUIARCQAQ", isCorrect: false },
          { textoRespuesta: "https://www.google.com.mx/imgres?imgurl=https%3A%2F%2Fimage.shutterstock.com%2Fimage-vector%2F2001-year-college-font-260nw-501092137.jpg&imgrefurl=https%3A%2F%2Fwww.shutterstock.com%2Fes%2Fsearch%2Fyear-2001&tbnid=TmlivNQHxf08LM&vet=12ahUKEwidus639-j6AhUloOAKHZGDB64QMygaegUIARDHAQ..i&docid=nhZzaRSwttpOFM&w=674&h=280&q=2001&hl=es&authuser=0&ved=2ahUKEwidus639-j6AhUloOAKHZGDB64QMygaegUIARDHAQ", isCorrect: false },
          { textoRespuesta: "https://www.google.com.mx/imgres?imgurl=https%3A%2F%2Fimage.shutterstock.com%2Fimage-vector%2F1987-year-college-font-260nw-500971993.jpg&imgrefurl=https%3A%2F%2Fwww.shutterstock.com%2Fes%2Fsearch%2F1987&tbnid=bjxnKlE2Ywc6JM&vet=12ahUKEwignNXA9-j6AhVJIt8KHXfnCb4QMygGegUIARCdAQ..i&docid=2xgGjxD1j99DvM&w=667&h=280&q=1987&hl=es&authuser=0&ved=2ahUKEwignNXA9-j6AhVJIt8KHXfnCb4QMygGegUIARCdAQ", isCorrect: false },
          { textoRespuesta: "https://www.google.com.mx/imgres?imgurl=https%3A%2F%2Fimages.saymedia-content.com%2F.image%2Ft_share%2FMTc0NDYwOTk3MTEyMDQ3MjM4%2Fpositively-frappuccino-1995-fun-facts-and-trivia.jpg&imgrefurl=https%3A%2F%2Fhobbylark.com%2Fparty-games%2FPositively-Frappuccino-1995-Fun-Facts-and-Trivia&tbnid=4fBrVVQzytEVRM&vet=12ahUKEwiMq4LL9-j6AhVbxSkDHd0tDfcQMygCegUIARCeAQ..i&docid=7S8r8XUBwh9wwM&w=1200&h=900&q=1995&hl=es&authuser=0&ved=2ahUKEwiMq4LL9-j6AhVbxSkDHd0tDfcQMygCegUIARCeAQ", isCorrect: true },
        ],
      },
];

export default preguntas;