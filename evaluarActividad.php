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
    <label>Selecciona el curso:</label>
    <input name="curso" list="cursos"/>
    <datalist id="cursos">
        <?php
            while ($curso = $cursos->fetch_assoc()){
                echo '<option>'.$curso["nombre"].'</option>';
            }
        ?>
            <!-- <option>Ingles</option> -->
    </datalist>

    <table>
        <thead>
           <tr> 
                <th>
                    Ejercicio
                </th>  
                <th>
                    Participante
                </th>
                <th>
                    Calificación
                </th> 
                <th>
                    Evaluar
                </th>
            <tr>
        </thead>
        <tbody>
            <tr>
                <td>Riesgos</td>

                <?php
                    echo '<td>'. $_SESSION["nombre"]. '</div>';
                    $ejercicioQuery = "SELECT `calificacion2` FROM `calificaciones` WHERE `usuarios_id`=$idUsuario";
                    $calificaciones = mysqli_query($link, $ejercicioQuery);
                    $calificacion = mysqli_fetch_row($calificaciones);
                    echo '<td>' . $calificacion[0] . '</td>';
                    
                ?>
                 <td><button>Calificar</button></td>
            </tr>
        </tbody>


    </table>
</body>
</html>


<!-- SELECT ejercicio_2.nombre_actividad, calificacion2, cursos.nombre FROM calificaciones INNER JOIN ejercicio_2 ON ejercicios_2=ejercicio_2.id INNER JOIN cursos ON calificaciones.cursos_id=cursos.id WHERE usuarios_id=1; -->