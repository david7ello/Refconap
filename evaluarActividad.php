<?php
include("valida_pagina.php");

$idUsuario = $_SESSION['id_user'];
$queryCursos = "SELECT cursos.nombre FROM `lista_cursos` INNER JOIN cursos ON curso_id=cursos.id WHERE user_id=$idUsuario;";
$cursos = mysqli_query($link, $queryCursos);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php
include("head.php")
?>

<?php
include("menu.php")
?>

<body>

<?php
    if (empty($_GET["success"])){

    }else{
        echo '<br/>';
        echo '<div class="form-group has-feedback" style="width:450px;">';
        echo '<div class="alert alert-success">';
        echo '<button class="close" data-dismiss="alert"><span>&times;</span></button>';
        echo $_GET["success"];
        echo '</div><br />';
        echo '</div>';
    }
    ?>


<div align="center">
    <table>
        <thead>
           <tr>
                <th>
                    Curso
                </th> 
                <th>
                    Ejercicio 1
                </th>  
                <th>
                    Ejercicio 2
                </th>
                <th>
                    Participante
                </th>
                <th>
                    Calificación Ejercicio 1
                </th> 
                <th>
                    Calificación Ejercicio 2
                </th> 
                <th>
                    Evaluar
                </th>
            <tr>
        </thead>
        <tbody>
            
                <?php
                
                $participantesQuery ="SELECT ejercicio_2.nombre_actividad AS nombre_actividad_2, calificacion1, ejercicio_1.nombre_actividad AS nombre_actividad_1, calificaciones.calificacion2, cursos.nombre, usuarios.nombre AS nombre_usuario, usuarios.apellidos, usuarios.id_user AS id_user FROM calificaciones INNER JOIN lista_cursos ON calificaciones.cursos_id=lista_cursos.curso_id INNER JOIN ejercicio_2 ON ejercicios_2 = ejercicio_2.id INNER JOIN cursos ON calificaciones.cursos_id=cursos.id INNER JOIN usuarios ON usuarios_id = usuarios.id_user INNER JOIN ejercicio_1 ON calificaciones.ejercicio_1 = ejercicio_1.id WHERE lista_cursos.user_id = $idUsuario;";
                 
                $calificaciones = mysqli_query($link, $participantesQuery);
                // $calificacion = mysqli_fetch_array($calificaciones);
                
                while ($calificacion = $calificaciones->fetch_assoc()){
                    if($_SESSION['nombre']!=$calificacion['nombre_usuario']){
                    
                echo '<tr>';
                echo '<td>' . $calificacion['nombre'] . '</td>';
                echo '<td>' . $calificacion['nombre_actividad_1'] . '</td>';
                echo '<td>' . $calificacion['nombre_actividad_2'] . '</td>';
                echo '<td>'. $calificacion['nombre_usuario']. ' ' . $calificacion["apellidos"] . '</td>';
                echo '<td style="text-align:center;">' . $calificacion['calificacion1'] . '</td>';
                echo '<td style="text-align:center;">' . $calificacion['calificacion2'] . '</td>';
                if ($calificacion['calificacion1'] == "" || $calificacion['calificacion2'] == ""){
                    echo '<td><a href="calificar.php?'
                    .'participante='.$calificacion['nombre_usuario']
                    .'&nombre_actividad_1='.$calificacion['nombre_actividad_1']
                    .'&nombre_actividad_2='.$calificacion['nombre_actividad_2']
                    .'&curso='.$calificacion['nombre']
                    .'&id='.$calificacion['id_user'].'">Calificar</a></td>';
                }else {
                    echo '<td><a href="calificar.php?'
                    .'participante='.$calificacion['nombre_usuario']
                    .'&nombre_actividad_1='.$calificacion['nombre_actividad_1']
                    .'&nombre_actividad_2='.$calificacion['nombre_actividad_2']
                    .'&curso='.$calificacion['nombre']
                    .'&calificacion1='.$calificacion['calificacion1']
                    .'&calificacion2='.$calificacion['calificacion2']
                    .'&id='.$calificacion['id_user'].'">Editar</a></td>'; 
                }
                echo '</tr>';
                } 
            }
                ?>

            
        </tbody>
    </table>

</div>

</body>
</html>


<!--  -->