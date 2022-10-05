<?php
include("valida_pagina.php"); //Conexión

$queryCursos = "SELECT * FROM cursos";
$cursosBD =  mysqli_query($link, $queryCursos); //enviamos nuestra conexión

$queryInstructores = "SELECT * FROM instructores"; //traemos la información de nuestra tabla
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
	<?php
	include("menu.php")
	?>

	<div align="center">
		<div class="div_container" style="width: 700px;">
			<div class="div_container_title" style="height: 35px;">
				<font class="font_title">REGISTRAR CURSO</font>
			</div><br>
			<div class="list-group" style="width:90%;">
				<form action="crudCursos.php" method="post" enctype="multipart/form-data">
					<div class="row">
						<div class="form-group col-md-12 text-left">
							<label for="inputEmail4">Nombre del curso</label>
							<input type="text" class="form-control" id="nombre_curso" name="nombre_curso" placeholder="Ingresa el nombre del curso" value="">
						</div>
					</div>

					<div class="row">
						<div class="form-group col-md-6">
							<label for="inputEmail4"> Fecha de inicio</label>
							<input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio" placeholder="" value="">
						</div>
						<div class="form-group col-md-6">
							<label for="inputEmail4"> Fecha de término</label>
							<input type="date" class="form-control" id="fecha_termino" name="fecha_termino" placeholder="" value="">
						</div>
					</div>

					<div class="row">
						<div class="form-group col-md-2">
							<label for="inputEmail4">Duración</label>
							<input type="Integer" class="form-control" id="duracion_curso" name="duracion_curso" placeholder="¿? horas" value="">
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
				if (isset($_GET["success"]) or $_GET["success"] != "") {
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
				if (isset($_GET["error"]) or $_GET["error"] != "") {
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
					<th>Instructor</th>
					<th>Opciones</th>
				</tr>
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
        <td>" . getInstructor($fila["id"]) . "</td>
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

			