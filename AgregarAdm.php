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
	<div align="center">
		<div class="div_container" style="width: 700px;">
			<div class="div_container_title" style="height: 35px;">
				<font class="font_title">AGREGAR ADMINISTRADOR</font>
			</div><br>
			<div class="list-group" style="width:90%;">
				<form action="InsertarAdm.php" method="post" enctype="multipart/form-data">
					<div class="row">
						<div class="form-group col-md-9 text-left">
							<label for="inputEmail4">Nombre</label>
							<input type="text" class="form-control" id="nombre_usuario" name="nombre_usuario" placeholder="" value="">
							<label for="inputEmail4">Apellidos</label>
							<input type="text" class="form-control" id="apellidos_adm" name="apellidos_adm" placeholder="" value="">
						</div>
						<div class="form-group col-md-3 text-left">
							<label for="inputEmail4">Teléfono</label>
							<input type="number" class="form-control" id="celular" name="celular" placeholder="" value="">						
						</div>
					</div>

					<div class="row">
						<div class="form-group col-md-6">
							<label for="inputEmail4">Contraseña</label>
							<input type="password" class="form-control" id="contrasenia" name="contrasenia" placeholder="" value="">
						</div>
						<div class="form-group col-md-6">
							<label for="inputEmail4"> Fecha</label>
							<input type="date" class="form-control" id="fecha" name="fecha" placeholder="" value="">
						</div>
					</div>

						<div class="row">
						<div class="form-group col-md-6">
							<label for="inputEmail4">Correo</label>
							<input type="email" class="form-control" id="correo" name="correo" placeholder="" value="">
						</div>

					<div class="row">
						<div class="form-group col-md-12 text-center">
							<input type="hidden" name="btn_guardar" value="guardar">
							<button type="submit" class="btn btn-default boton_color">Guardar <span> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill=#597e8d class="bi bi-save2-fill" viewBox="0 0 16 16">  <path d="M8.5 1.5A1.5 1.5 0 0 1 10 0h4a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h6c-.314.418-.5.937-.5 1.5v6h-2a.5.5 0 0 0-.354.854l2.5 2.5a.5.5 0 0 0 .708 0l2.5-2.5A.5.5 0 0 0 10.5 7.5h-2v-6z"/> </svg> </span></button>
						</div>
					</div>
				</form>

				<form action="sistema.php" method="post">
					<button type="submit" class="btn btn-default boton_color"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill=#597e8d class="bi bi-caret-left-square" viewBox="0 0 16 16">
  					<path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/> <path d="M10.205 12.456A.5.5 0 0 0 10.5 12V4a.5.5 0 0 0-.832-.374l-4.5 4a.5.5 0 0 0 0 .748l4.5 4a.5.5 0 0 0 .537.082z"/>
					</svg> </span>Regresar
					</button>
					
				</form>
			</div>
		</div>
	</div>




</body>
</html>
