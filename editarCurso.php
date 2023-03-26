<?php
include("valida_pagina.php");
$id_curso = $_GET['id_curso'];

$queryCurso = "SELECT id, nombre, fecha_inicio, fecha_final, duracion, instructor, horas_dia, hora_inicio, hora_fin FROM cursos WHERE id=" .$id_curso;
$cursoDB = mysqli_query($link, $queryCurso);

$curso = mysqli_fetch_array($cursoDB);

$nombre = $curso['nombre'];
$fecha_inicio = $curso['fecha_inicio'];
$fecha_final = $curso['fecha_final'];
$duracion = $curso['duracion'];
$instructor = $curso['instructor'];
$horas_dia = $curso['horas_dia'];
$hora_incio = $curso['hora_inicio'];
$hora_fin = $curso['hora_fin'];
 

$queryInstructores = "SELECT `id_user`, `nombre`, `apellidos` FROM `usuarios` WHERE roles=2";
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

<?php
include("head.php");
include("menu.php");
?>

<div align="center">
		<div class="div_container" style="width: 700px;">
			<div class="div_container_title" style="height: 35px;">
				<font class="font_title">EDITAR CURSO</font>
			</div><br>
			<div class="list-group" style="width:90%;">
				<form action="crudCursos.php" method="post" enctype="multipart/form-data">
					<div class="row">
						<div class="form-group col-md-12 text-left">
							<label for="inputEmail4">Nombre del curso</label>
							<input type="text" class="form-control" id="nombre_curso_editar" name="nombre_curso_editar" placeholder="Ingresa el nombre del curso" value="<?php echo $nombre ?>">
						</div>
					</div>

					<div class="row">
						<div class="form-group col-md-6">
							<label for="inputEmail4"> Fecha de inicio</label>
							<input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio_editar" placeholder="" required min=<?php $hoy=date("Y-m-d"); echo $hoy;?> value="<?php echo $fecha_inicio;?>">
						</div>
						<div class="form-group col-md-6">
							<label for="inputEmail4"> Fecha de término</label>
							<input type="date" class="form-control" id="fecha_termino" name="fecha_termino_editar" value="<?php echo $fecha_final;?>" placeholder="" required min=<?php $hoy=date("Y-m-d"); echo $hoy;?>>
						</div>
					</div>

					<div class="row">
						<div class="form-group col-md-2">
							<label for="inputEmail4">Duración</label>
							<input type="number" class="form-control" id="duracion_curso" name="duracion_curso_editar" placeholder="8 minimo" min="8" max="240" required value="<?php echo $duracion;?>">
						</div>

						<div class="row">
						<div class="form-group col-md-3">
							<label for="inputEmail4">Horas al día</label>
							<input onblur="calcularHoraFin(event)" type="number" class="form-control" id="horas_al_dia_curso" name="horas_dia_editar" placeholder="1 minimo" min="1" max="24" required value="<?php echo $horas_dia;?>">
						</div>
					
					<div class="row">
						<div class="form-group col-md-3">
							<label for="inputEmail4">Horario inicio</label>
							<input onblur="calcularHoraFin(event)" type="time" class="form-control" id="horario_inicio_curso" name="horario_inicio_editar" placeholder="" required value="<?php echo $hora_incio;?>">
						</div>
					
					<div class="row">
						<div class="form-group col-md-3">
							<label for="inputEmail4">Horario termino</label>
							<input type="time" class="form-control" id="horario_fin_curso" name="horario_fin_editar" placeholder="" required value="<?php echo $hora_fin;?>">
						</div>

						<div class="form-group col-md-6">
							<label for="inputEmail4">Instructor asignado</label>
							<br />
							<select name="select">
								<!-- php for each -->
								<?php foreach ($instructores as $instructor) { ?>
									<option value="<?php echo $instructor['id_user'] ?>"><?php echo $instructor['nombre'] ?></option>
								<?php } ?>
							</select>
						</div>

						<div class="row">
                                         
							<div class="form-group col-md-12 text-center">
                                <input type="hidden" name="id_curso_editar" id="id_curso_editar" value="<?php echo $id_curso ?>">
								<input type="hidden" name="btn_actualizarCurso" value="guardar">
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

				</form>
			</div>
		</div>
	</div>




