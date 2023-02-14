
<?php
include("valida_pagina.php");
include("head.php");
include("menu.php");

$idUsuario = $_SESSION['id_user'];
$queryCursos = "SELECT curso_id FROM lista_cursos WHERE user_id=$idUsuario";
$cursos = mysqli_query($link, $queryCursos);
$dataCurso = mysqli_fetch_row($cursos);


$queryActividades = "SELECT DISTINCT cursos.nombre, cursos.instructor, ejercicio_2.nombre_actividad, ejercicio_2.respuestas_id FROM ejercicio_2 INNER JOIN cursos ON (ejercicio_2.cursos_id=cursos.id) WHERE cursos_id=$dataCurso[0]";
$actividades = mysqli_query($link, $queryActividades);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<body>

<div>
	<table>
		<thead>
			<tr>
				<th>Curso</th>
				<th>Nombre actividad</th>
				<th>Instructor</th>
				<th>Realizar</th>
			</tr>
	</thead>
	<tbody>
	
    
        <?php
				while ($fila = $actividades->fetch_assoc()) { //ciclo para recorrido de las filas
					echo "<tr>        
        
        <td>" . $fila["nombre"] . "</td>
        <td>" . $fila["nombre_actividad"] . "</td>
        <td>" . $fila["instructor"] . "</td>

    
        <td>" . "<form method='POST'>
		<a href='editarCurso.php?id_curso=" . $fila["respuestas_id"] . "'><button type='button' class='btn btn-default boton_color'>Resolver</button></a>

		</form>" . "</td>
    	</tr>";
				}
				?>
			</tbody>
		</table>
	</div>




    <form action="resolverEjercicio2.php" method="post" enctype="multipart/form-data">
        <h2>Selecciona tu curso</h2>
        <input name="curso" list="cursos" />
        <?php
        echo '<datalist id="cursos"/>';
        while ($curso= $cursos->fetch_assoc()){
            echo '<option>'.$curso['nombre'].'</option>';
        }
        echo '</datalist>';
        ?>
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