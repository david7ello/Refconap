<?php
include("valida_pagina.php");
include("head.php");
include("menu.php");
$id = $_SESSION['id_user'];


$queryCalif = "SELECT `calificacion1`, `calificacion2`, `usuarios_id`, `cursos_id`, `ejercicio_1`, `ejercicios_2` FROM `calificaciones` WHERE usuarios_id=$id";
$result = mysqli_query($link, $queryCalif);
$calificaciones = mysqli_fetch_array($result);

?>

<body>

<div align="center">
		<table>
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Apellidos</th>
                    <th>Calificación ejercicio #1</th>
                    <th>Calificación ejercicio #2</th>
				</tr>
				</tr>
			</thead>
			<tbody>
				<?php

        $calificado1 = "Pendiente por calificar";
        $calificado2 = "Pendiente por calificar";

        if (!empty($calificaciones['calificacion1'])){
            $calificado1 = $calificaciones['calificacion1'];
        }

        if (!empty($calificaciones['calificacion2'])){
            $calificado2 = $calificaciones['calificacion2'];
        }

		echo "<tr>        
        <td>" . $_SESSION["nombre"] . "</td>
        <td>" . $_SESSION["apellidos"] . "</td>
 		<td style='text-align: center;'>" . $calificado1 . "</td>
 		<td style='text-align: center;'>" . $calificado2 . "</td>
    	</tr>";
				
				?>
			</tbody>
		</table>
	</div>



</body>