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


<body>
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

    <div class="ejerUno">

        <header>
            <h2>Grupos de procesos</h2>
        </header>
        <div class="listas">
            <div class="lista" ondrop="drop(event)" ondragover="allowDrop(event)">
                <div id="drag1" draggable="true" ondragstart="drag(event)" class="list-item">Elemento A</div>
                <div id="drag2" ondragstart="drag(event)" class="list-item" draggable="true">Elemento B</div>
                <div id="drag3" ondragstart="drag(event)" class="list-item" draggable="true">Elemento C</div>
                <div id="drag4" ondragstart="drag(event)" class="list-item" draggable="true">Elemento D</div>
                <div id="drag5" ondragstart="drag(event)" class="list-item" draggable="true">Elemento E</div>
            </div>
            <div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)" class="lista">Procesos de Inicio</div>
            <div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)" class="lista">Procesos de planificación</div>
            <div id="div3" ondrop="drop(event)" ondragover="allowDrop(event)" class="lista">Procesos de ejecución</div>
            <div id="div4" ondrop="drop(event)" ondragover="allowDrop(event)" class="lista">Procesos de seguimiento y control</div>
            <div id="div5" ondrop="drop(event)" ondragover="allowDrop(event)" class="lista">Proceso de cierre</div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
    <script src="ejerUno.js"></script>

</body>

</html>