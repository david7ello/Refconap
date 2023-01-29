
<?php
include("valida_pagina.php");
include("head.php");
include("menu.php");
$queryActividades = "SELECT DISTINCT `nombre_actividad` FROM `ejercicio_2` WHERE `cursos_id`=49";
$actividades = mysqli_query($link, $queryActividades);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<body>
    <form action="resolverEjercicio2.php" method="post" enctype="multipart/form-data">
        <h2>Selecciona la actividad</h2>
        <input name="actividad" list="actividades"/>
        <?php
            echo '<datalist id="actividades">';
            while($actividad = $actividades->fetch_assoc()){
                echo '<option>'.$actividad['nombre_actividad'].'</option>';
            }
            echo '</datalist>'
        ?>
        <input name="btn_submit" type="submit"/>
    </form>
</body>

</html>