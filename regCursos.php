<?php
include("valida_pagina.php"); //Conexión

$queryCursos = "SELECT * FROM cursos";
$cursosBD =  mysqli_query($link, $queryCursos); //enviamos nuestra conexión

$queryInstructores = "SELECT `id_user`, `nombre`, `apellidos` FROM `usuarios` WHERE roles=2"; //traemos la información de nuestra tabla
$instructores = mysqli_query($link, $queryInstructores);

function getInstructor($idInstructor)
{
	foreach ($GLOBALS['instructores'] as $instructor) {
		if ($instructor['id_user'] == $idInstructor) {
			return $instructor['nombre'];
		}
	}
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php
include("head.php")
?>

<body>
	<script>
		function calcularHoraFin(event) {
			let horaInicio = document.getElementById("horario_inicio_curso");
			let cantidadHoras = document.getElementById("horas_al_dia_curso");
			let horaFin = document.getElementById("horario_fin_curso");
			if (horaInicio.value === "" || cantidadHoras.value === ""){
				} else{
				let fecha = new Date("2023-10-02T" + horaInicio.value);
				if (fecha.getHours() + parseInt(cantidadHoras.value,10) < 24){
					fecha.setHours(fecha.getHours() + parseInt(cantidadHoras.value,10));
					let horas = fecha.getHours();
					let minutos = fecha.getMinutes();
					horas = horas < 10 ? "0" + horas : horas;
					minutos = minutos < 10 ? "0" + minutos : minutos;
					horaFin.value = horas + ":" + minutos;
				}else {
					alert("Número de horas al día mayores a 24, verifica por favor")
				}
			}	
		}
	</script>

	<?php
	include("menu.php")
	?>

	<div align="center">
		<div class="div_container" style="width: 900px;">
			<div class="div_container_title" style="height: 35px;">
				<font class="font_title">REGISTRAR CURSO</font>
			</div><br>
			<div class="list-group" style="width:90%;">
				<form action="crudCursos.php" method="post" enctype="multipart/form-data">
					<div class="row">
						<div class="form-group col-md-12 text-left">
							<label for="inputEmail4">Nombre del curso</label>
							<input type="text" class="form-control" id="nombre_curso" name="nombre_curso" placeholder="Ingresa el nombre del curso" required value="">
						</div>
					</div>

					<div class="row">
						<div class="form-group col-md-6">
							<label for="inputEmail4"> Fecha de inicio</label>
							<input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio" placeholder="" required min=<?php $hoy=date("Y-m-d"); echo $hoy;?> value="<?php $hoy=date("Y-m-d"); echo $hoy;?>">
						</div>
						<div class="form-group col-md-6">
							<label for="inputEmail4"> Fecha de término</label>
							<input type="date" class="form-control" id="fecha_termino" name="fecha_termino" placeholder="" required min=<?php $hoy=date("Y-m-d"); echo $hoy;?>>
						</div>
					</div>

						<div class="row">
						<div class="form-group col-md-2">
							<label for="inputEmail4">Duración</label>
							<input type="number" class="form-control" id="duracion_curso" name="duracion_curso" placeholder="8 minimo" min="8" max="240" required value="">
						</div>
					
						<div class="row">
						<div class="form-group col-md-3">
							<label for="inputEmail4">Horas al día</label>
							<input onblur="calcularHoraFin(event)" type="number" class="form-control" id="horas_al_dia_curso" name="horas_al_dia_curso" placeholder="1 minimo" min="1" max="24" required value="">
						</div>
					
					<div class="row">
						<div class="form-group col-md-3">
							<label for="inputEmail4">Horario inicio</label>
							<input onblur="calcularHoraFin(event)" type="time" class="form-control" id="horario_inicio_curso" name="horario_inicio_curso" placeholder="" required value="">
						</div>
					
					<div class="row">
						<div class="form-group col-md-3">
							<label for="inputEmail4">Horario termino</label>
							<input type="time" class="form-control" id="horario_fin_curso" name="horario_fin_curso" placeholder="" required value="">
						</div>

						<!-- <div class="form-group col-md-6">
							<label for="inputEmail4">Instructor asignado</label>
							<br />
							<select name="select"> -->
								<!-- php for each 
								
									<option value="</option>
								
							</select>
						</div> -->
						

						<div class="row">
							<div class="form-group col-md-12 text-center">
								<input type="hidden" name="btn_registrarCurso" value="guardar">
								<button type="submit" class="btn btn-default boton_color">Guardar <span> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill=#597e8d class="bi bi-save2-fill" viewBox="0 0 16 16">
											<path d="M8.5 1.5A1.5 1.5 0 0 1 10 0h4a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h6c-.314.418-.5.937-.5 1.5v6h-2a.5.5 0 0 0-.354.854l2.5 2.5a.5.5 0 0 0 .708 0l2.5-2.5A.5.5 0 0 0 10.5 7.5h-2v-6z" />
										</svg> </span></button>
							</div>
						</div>
				</form>

				<form action="sistema.php" method="post">
					<button type="submit" class="btn btn-default boton_color"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill=#597e8d class="bi bi-caret-left-square" viewBox="0 0 16 16">
							<path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
							<path d="M10.205 12.456A.5.5 0 0 0 10.5 12V4a.5.5 0 0 0-.832-.374l-4.5 4a.5.5 0 0 0 0 .748l4.5 4a.5.5 0 0 0 .537.082z" />
						</svg> </span>Regresar
					</button>
				</form>

				<?PHP
				if (empty($_GET["success"]) ) {} else{
					echo '<br/>';
					echo '<div class="form-group has-feedback" style="width:450px;">';
					echo '<div class="alert alert-success">';
					echo '<button class="close" data-dismiss="alert"><span>&times;</span></button>';
					echo $_GET["success"];
					echo '</div><br />';
					echo '</div>';
				}
				?>

				<?PHP
				if (empty($_GET["error"]) ){}else {
					echo '<br/>';
					echo '<div class="form-group has-feedback" style="width:450px;">';
					echo '<div class="alert alert-danger">';
					echo '<button class="close" data-dismiss="alert"><span>&times;</span></button>';
					echo $_GET["error"];
					echo '</div><br />';
					echo '</div>';
				}
				?>

			</div>
		</div>
	</div>

	<div>
		<table>
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Fecha Inicio</th>
					<th>Fecha Final</th>
					<th>Duracion</th>
					<th>Horas al día</th>
					<th>Hora Inicio</th>
					<th>Hora Termino</th>
					<th>Instructor</th>
					<th>Opciones</th>
				</tr>
				
			</thead>
			<tbody>
				<?php
				while ($fila = $cursosBD->fetch_assoc()) { //ciclo para recorrido de las filas
					echo "<tr>        
        <td>" . $fila["nombre"] . "</td>
        <td>" . $fila["fecha_inicio"] . "</td>
        <td>" . $fila["fecha_final"] . "</td>
        <td>" . $fila["duracion"] . "</td>
        <td>" . $fila["horas_dia"] . "</td>
        <td>" . $fila["hora_inicio"] . "</td>
        <td>" . $fila["hora_fin"] . "</td>

        <td>" . getInstructor($fila["instructor"]) ."</td>
        <td>" . "<form method='POST'>
		<a href='editarCurso.php?id_curso=" . $fila["id"] . "'><button type='button' class='btn btn-default boton_color'>Editar</button></a>
		<a href='crudCursos.php?id_eliminar_curso=" . $fila["id"] . "'><button type='button' class='btn btn-default boton_color'>Eliminar</button></a>
		</form>" . "</td>
    	</tr>";
				}
				?>
			</tbody>
		</table>
	</div>
</body>

			