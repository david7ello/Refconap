
<?php
include("valida_pagina.php");
include("head.php");
include("menu.php");

$idUsuario = $_SESSION['id_user'];

$queryPendientes = "SELECT pdf_2 FROM registro_calificaciones WHERE users_id=$idUsuario";
$result = mysqli_query($link, $queryPendientes);
$pendientes = mysqli_fetch_array($result);
if (!empty($pendientes['pdf_2'])){
    echo '<pre> Actividad resuelta </pre>';
    // echo '<div> '.print_r($pendientes) . '</div>';
    // echo '<div> Puedes resolver actividad </div>';
}else{


$rol = $_SESSION['tipo'];
if($rol==1){
    $queryActividades = "SELECT DISTINCT cursos.nombre, cursos.instructor, ejercicio_2.nombre_actividad, ejercicio_2.respuestas_id FROM ejercicio_2 INNER JOIN cursos ON (ejercicio_2.cursos_id = cursos.id)";
    $actividades = mysqli_query($link, $queryActividades);
} else {
    
    $queryCursos = "SELECT curso_id FROM lista_cursos WHERE user_id=$idUsuario";
    $cursos = mysqli_query($link, $queryCursos);
    if($cursos->num_rows==0){
    echo '<pre> Aún no tienes actividades asignadas </pre>';
    $actividades="";

    }else {
        $dataCurso = mysqli_fetch_row($cursos);
        $queryActividades = "SELECT DISTINCT cursos.nombre, cursos.instructor, ejercicio_2.nombre_actividad, ejercicio_2.respuestas_id FROM ejercicio_2 INNER JOIN cursos ON (ejercicio_2.cursos_id=cursos.id) WHERE cursos_id=$dataCurso[0]";
        $actividades = mysqli_query($link, $queryActividades);
    }
}

$actividades = mysqli_query($link, $queryActividades);


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<body>

<div>
    <h1>
        <?php echo $_SESSION["nombre"].' estas son tus actividades'?> 
    </h1>


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
            if(($actividades !="")){
				while ($fila = $actividades->fetch_assoc()) { //ciclo para recorrido de las filas
					$idInstructor = $fila["instructor"];
                    $queryInstructor = "SELECT nombre, apellidos FROM usuarios WHERE id_user=$idInstructor;";
                    $instructor = mysqli_query($link, $queryInstructor);
                    $nombreInstructorArray = mysqli_fetch_row($instructor);
                    $nombreInstructorCompleto = $nombreInstructorArray[0] . " ". $nombreInstructorArray[1];
                    echo "<tr>        
                    <td>" . $fila["nombre"] . "</td>
                    <td>" . $fila["nombre_actividad"] . "</td>
                    <td>" . $nombreInstructorCompleto . "</td>
                    <td>" . "<form method='POST'>
		            <a href='resolverEjercicio2.php?nombre_actividad=" . $fila["nombre_actividad"] . "'><button type='button' class='btn btn-default boton_color'>Resolver</button></a>
		            </form>" . "</td>
    	            </tr>";
				}
            }
				?>
			</tbody>
		</table>
	</div>

    </form> 



</body>


</html>

<?php
}
?>