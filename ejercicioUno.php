<?php
include("valida_pagina.php");

$queryAdmin = "SELECT * FROM usuarios";
$administradores =  mysqli_query($link, $queryAdmin);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php
include("head.php");
?>


<body >
    <script>
        function allowDrop(e) {
            e.preventDefault();
        }

        function drag(e) {
            e.dataTransfer.setData("text", e.target.id)
        }

        function drop(e) {
            e.preventDefault();
            var data = e.dataTransfer.getData("text");
            e.target.appendChild(document.getElementById(data));
        }
    </script>
    <?php
    include("menu.php");
    ?>

    <div class="ejerUno" id="pantalla1">

        <header>
            <h2>GRUPOS DE PROCESOS</h2>
            <button onclick="genPDF()">Generar Pdf</button>
        </header>
        <div class="listas">
            <div class="lista" ondrop="drop(event)" ondragover="allowDrop(event)">ÁREAS DE CONOCIMIENTO
                <!--Correspondiente a gestión de la integración -->
                <div id="drag1" draggable="true" ondragstart="drag(event)" class="list-item">Gestión de la integración  
                <p>1.1 Acta constitución</p></div>
                <div id="drag2" ondragstart="drag(event)" class="list-item" draggable="true">Gestión de la integración  
                <p>2.1 Plan de dirección</p></div>
                <div id="drag3" ondragstart="drag(event)" class="list-item" draggable="true">Gestión de la integración  
                <p>3.1 Gestionar el trabajo</p></div>
                <div id="drag4" ondragstart="drag(event)" class="list-item" draggable="true">Gestión de la integración  
                <p>3.2 Gestionar el conocimiento</p></div>
                <div id="drag5" ondragstart="drag(event)" class="list-item" draggable="true">Gestión de la integración  
                <p>4.1 Monitoreo y control del trabajo</div>

                <div id="drag6" draggable="true" ondragstart="drag(event)" class="list-item">Gestión de la integración  
                <p>4.2 Control de cambios</p></div>
                <div id="drag7" ondragstart="drag(event)" class="list-item" draggable="true">Gestión de la integración  
                <p>5.1 Cierre de proyecto</p></div>
                <!--Correspondiente a gestión de la integración-->

                <!--Correspondiente a gestión del alcance-->
                <div id="drag8" ondragstart="drag(event)" class="list-item" draggable="true">Gestión del alcance 
                <p>2.1 Planificar gestión del alcance</p></div>
                <div id="drag9" ondragstart="drag(event)" class="list-item" draggable="true">Gestión del alcance 
                <p>2.2 Recopilar requisitos</p></div>
                <div id="drag10" ondragstart="drag(event)" class="list-item" draggable="true">Gestión del alcance 
                <p>2.3 Definir el alcance</p></div>
                <div id="drag11" ondragstart="drag(event)" class="list-item" draggable="true">Gestión del alcance 
                <p>2.4 Generación EDT</p></div>
                <div id="drag12" ondragstart="drag(event)" class="list-item" draggable="true">Gestión del alcance 
                <p>4.1 Validar alcance</p></div>
                <div id="drag13" ondragstart="drag(event)" class="list-item" draggable="true">Gestión del alcance 
                <p>4.2 Controlar alcance</p></div>
                <!--Correspondiente a gestión del alcance-->

                <!--Correspondiente a gestión del cronograma-->
                <div id="drag14" ondragstart="drag(event)" class="list-item" draggable="true">Gestión del cronograma 
                <p>2.1 Planificar gestión del cronograma</p></div>
                <div id="drag15" ondragstart="drag(event)" class="list-item" draggable="true">Gestión del cronograma 
                <p>2.2 Definir actividades</p></div>
                <div id="drag16" ondragstart="drag(event)" class="list-item" draggable="true">Gestión del cronograma 
                <p>2.3 Secuencia de actividades</p></div>
                <div id="drag17" ondragstart="drag(event)" class="list-item" draggable="true">Gestión del cronograma 
                <p>2.4 Estimar duración de actividades</p></div>
                <div id="drag18" ondragstart="drag(event)" class="list-item" draggable="true">Gestión del cronograma 
                <p>2.5 Desarrollo de cronograma</p></div>
                <div id="drag19" ondragstart="drag(event)" class="list-item" draggable="true">Gestión del cronograma 
                <p>4.1 Controlar cronograma</p></div>
                <!--Correspondiente a gestión del cronograma-->

                <!--Correspondiente a gestión de costos-->
                <div id="drag20" ondragstart="drag(event)" class="list-item" draggable="true">Gestión de costos 
                <p>2.1 Planificar gestión de costos</p></div>
                <div id="drag21" ondragstart="drag(event)" class="list-item" draggable="true">Gestión de costos 
                <p>2.2 Estimación de costos</p></div>
                <div id="drag22" ondragstart="drag(event)" class="list-item" draggable="true">Gestión de costos 
                <p>2.3 Determinar presupuesto</p></div>
                <div id="drag23" ondragstart="drag(event)" class="list-item" draggable="true">Gestión de costos 
                <p>4.1 Control de costos</p></div>
                <!--Correspondiente a gestión de costos-->

                <!--Correspondiente a gestión de la calidad-->
                <div id="drag24" ondragstart="drag(event)" class="list-item" draggable="true">Gestión de la calidad 
                <p>2.1 Planificar gestión de la calidad</p></div>
                <div id="drag25" ondragstart="drag(event)" class="list-item" draggable="true">Gestión de la calidad 
                <p>3.1 Gestionar la calidad</p></div>
                <div id="drag26" ondragstart="drag(event)" class="list-item" draggable="true">Gestión de la calidad 
                <p>4.1 Control de calidad</p></div>
                <!--Correspondiente a gestión de la calidad-->

                <!--Correspondiente a gestión de recursos-->
                <div id="drag27" ondragstart="drag(event)" class="list-item" draggable="true">Gestión de recursos 
                <p>2.1 Planificar gestión de recursos</p></div>
                <div id="drag28" ondragstart="drag(event)" class="list-item" draggable="true">Gestión de recursos 
                <p>2.2 Estimar recursos de actividades</p></div>
                <div id="drag29" ondragstart="drag(event)" class="list-item" draggable="true">Gestión de recursos 
                <p>3.1 Adquirir recursos</p></div>
                <div id="drag30" ondragstart="drag(event)" class="list-item" draggable="true">Gestión de recursos 
                <p>3.2 Desarrollo del equipo del proyecto</p></div>
                <div id="drag31" ondragstart="drag(event)" class="list-item" draggable="true">Gestión de recursos 
                <p>3.3 Dirigir el equipo del proyecto</p></div>
                <div id="drag32" ondragstart="drag(event)" class="list-item" draggable="true">Gestión de recursos 
                <p>4.1 Controlar recursos</p></div>
                <!--Correspondiente a gestión de recursos-->

                <!--Correspondiente a gestión de comunicaciones-->
                <div id="drag33" ondragstart="drag(event)" class="list-item" draggable="true">Gestión de comunicaciones 
                <p>2.1 Planificar gestión de comunicaciones</p></div>
                <div id="drag34" ondragstart="drag(event)" class="list-item" draggable="true">Gestión de comunicaciones 
                <p>3.1 Gestionar comunicaciones</p></div>
                <div id="drag35" ondragstart="drag(event)" class="list-item" draggable="true">Gestión de comunicaciones 
                <p>4.1 Monitorear comunicaciones</p></div>
                <!--Correspondiente a gestión de comunicaciones-->

                <!--Correspondiente a gestión de riesgos-->
                <div id="drag36" ondragstart="drag(event)" class="list-item" draggable="true">Gestión de riesgos 
                <p>2.1 Planificar gestión de riesgos</p></div>
                <div id="drag37" ondragstart="drag(event)" class="list-item" draggable="true">Gestión de riesgos 
                <p>2.2 Identificar riesgos</p></div>
                <div id="drag38" ondragstart="drag(event)" class="list-item" draggable="true">Gestión de riesgos 
                <p>2.3 Análisis cualitativo de riesgos</p></div>
                <div id="drag39" ondragstart="drag(event)" class="list-item" draggable="true">Gestión de riesgos 
                <p>2.4 Análisis cuantitativo de riesgos</p></div>
                <div id="drag40" ondragstart="drag(event)" class="list-item" draggable="true">Gestión de riesgos 
                <p>2.5 Planificar respuesta de riesgos</p></div>
                <div id="drag41" ondragstart="drag(event)" class="list-item" draggable="true">Gestión de riesgos 
                <p>3.1 Implementar respuesta de riesgos</p></div>
                <div id="drag42" ondragstart="drag(event)" class="list-item" draggable="true">Gestión de riesgos 
                <p>4.1 Monitorear riesgos</p></div>
                <!--Correspondiente a gestión de riesgos-->

                <!--Correspondiente a gestión de adquisiciones-->
                <div id="drag43" ondragstart="drag(event)" class="list-item" draggable="true">Gestión de adquisiciones 
                <p>2.1 Planificar gestión de adquisiciones</p></div>
                <div id="drag44" ondragstart="drag(event)" class="list-item" draggable="true">Gestión de adquisiciones 
                <p>3.1 Realizar adquisiciones</p></div>
                <div id="drag45" ondragstart="drag(event)" class="list-item" draggable="true">Gestión de adquisiciones 
                <p>4.1 Controlar adquisiciones</p></div>
                <!--Correspondiente a gestión de adquisiciones-->

                <!--Correspondiente a gestión de los interesados-->
                <div id="drag46" ondragstart="drag(event)" class="list-item" draggable="true">Gestión de los interesados 
                <p>1.1 Identificar interesados</p></div>
                <div id="drag47" ondragstart="drag(event)" class="list-item" draggable="true">Gestión de los interesados 
                <p>2.1 Planificar involucramiento de interesados</p></div>
                <div id="drag48" ondragstart="drag(event)" class="list-item" draggable="true">Gestión de los interesados 
                <p>3.1 Gestión participación de los interesados</p></div>
                <div id="drag49" ondragstart="drag(event)" class="list-item" draggable="true">Gestión de los interesados 
                <p>4.1 Monitoreo del involucramiento de los interesados</p></div>
                <!--Correspondiente a gestión de los interesados-->

            </div>


            <div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)" class="lista">INICIO</div>
            <div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)" class="lista">PLANIFICACIÓN</div>
            <div id="div3" ondrop="drop(event)" ondragover="allowDrop(event)" class="lista">EJECUCIÓN</div>
            <div id="div4" ondrop="drop(event)" ondragover="allowDrop(event)" class="lista">SEGUIMIENTO Y CONTROL</div>
            <div id="div5" ondrop="drop(event)" ondragover="allowDrop(event)" class="lista">CIERRE</div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js" integrity="sha384-NaWTHo/8YCBYJ59830LTz/P4aQZK1sS0SneOgAvhsIl3zBu8r9RevNg5lHCHAuQ/" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/html2canvas@1.0.0-rc.1/dist/html2canvas.min.js"></script>

    <script src="ejerUno.js"></script>
    <script type="text/javascript">

        function genPDF(){
        html2canvas(document.getElementById('pantalla1')).then(function(canvas){
            document.body.appendChild(canvas)
            var imgdata = canvas.toDataURL('image/png')
            const tamañoImg = {height:50, width:50}
            var doc = new jsPDF()
            doc.addImage(imgdata,'PNG',0,0,tamañoImg.height, tamañoImg.width)
            doc.save("ejercicio1.pdf")
        })
        
        }

    </script>

</body>

</html>