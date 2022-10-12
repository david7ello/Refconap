<?php
include("valida_pagina.php");

$queryAdmin = "SELECT * FROM usuarios";
$administradores =  mysqli_query($link, $queryAdmin);
?>	

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php 
include ("head.php");
?>

<body>
	<?php 
	include("menu.php");
	?>

   <div class="ejerUno">
        <header>
            <h2>Grupos de procesos</h2>
        </header>
       <div class="listas">
            <div class="lista">
                <div class="list-item" draggable="true">Elemento A</div>
                <div class="list-item" draggable="true">Elemento B</div>
                <div class="list-item" draggable="true">Elemento C</div>
                <div class="list-item" draggable="true">Elemento D</div>
                <div class="list-item" draggable="true">Elemento E</div>
            </div>
            <div class="lista">Procesos de Inicio</div>
            <div class="lista">Procesos de planificación</div>
            <div class="lista">Procesos de ejecución</div>
            <div class="lista">Procesos de seguimiento y control</div>
            <div class="lista">Proceso de cierre</div>
       </div>
   </div>

    <script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
    <script src="ejerUno.js"></script>

</body>
</html>