<?php
include("valida_pagina.php");
include("head.php");
include("menu.php");

$actividad = $_SESSION['actividad'];
$curso = $_SESSION['curso'];
$nombre = $_SESSION['nombre'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <link rel="stylesheet" href="./css/mapaMental.css"/>
    </head>

    <body>
        <script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js" integrity="sha384-NaWTHo/8YCBYJ59830LTz/P4aQZK1sS0SneOgAvhsIl3zBu8r9RevNg5lHCHAuQ/" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/html2canvas@1.0.0-rc.1/dist/html2canvas.min.js"></script>

        <script>
            function sendPDF(){

            }

            function genPDF(){
            html2canvas(document.getElementById('mapaMental')).then(function(canvas){
            document.body.appendChild(canvas)
            var imgdata = canvas.toDataURL('image/png')
            const tamañoImg = {height:1500, width:200}
            const doc = new jsPDF({
                orientation:"l",
                format:"letter",
            })
            const anchoPagina = doc.internal.pageSize.getWidth();
            const altoPagina = doc.internal.pageSize.getHeight();
            const anchoProporcion = anchoPagina/canvas.width;
            const altoProporcion = altoPagina/canvas.height;
            const proporcion = anchoProporcion > altoProporcion ? altoProporcion : anchoProporcion;
            const anchoImagen = 250
            const altoImagen = canvas.height * proporcion;
            const margenHorizontal = (anchoPagina - anchoImagen)/2;
            const margenVertical = (altoPagina - altoImagen)/2;

            doc.addImage(imgdata,'PNG', margenHorizontal, margenVertical, anchoImagen, altoImagen)
            doc.save("ejercicio1.pdf")
            document.body.removeChild(canvas)

            const archivo = new FormData();
            archivo.append('doc', new Blob([doc.outpout()], {type:"application/pdf"}),'doc.pdf',)
            fetch('subirPDF.php',
            {
                method: 'POST',
                body: doc
            })
            .then((response)=>{
                console.log(response);
            })
            .catch((error)=>{
                console.log(eror);
            })
        
        })
        </script>

    <div class="contenedor">
        <button onclick="genPDF()">Generar PDF</button> 
    </div>

    <div class="contenedor">

    <div id="mapaMental" class="grid"> <!--Contenedor principal-->
        <div class="concepto"><label> <?php echo $actividad ?> </label></div>

        <?php
            $i=0;
            foreach(array_reverse($_POST) as $respuesta){
                if ($respuesta != "Enviar"){
                $datos = explode("+", $respuesta);
                if ($i==0){
                    echo '<div class="primerImagen">';
                }elseif ($i==1) {
                    echo '<div class="segundaImagen">';
                }elseif ($i==2) {
                    echo '<div class="terceraImagen">';
                }elseif ($i==3) {
                    echo '<div class="cuartaImagen">';
                }
                if ($i<=3){
                    echo '<img src="'.$datos[1].'" alt="Primer imagen" style="width: 150px;"/>';
                    echo '<div>';
                    echo '<label>'. $datos[0] . '</label>';
                    echo '</div>';
                    echo '</div>';
                }
                $i++;
             }
            }
        ?>
        <label class="nombre">
            <?php echo $nombre ?>
        </label>
    </div>
</div>
    </body>
</html>
