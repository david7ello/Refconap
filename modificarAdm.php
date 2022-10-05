<?php
include("valida_pagina.php")

?>	

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php 
include ("head.php")
?>

<body>
	<?php 
	include("menu.php")
	?>

	<div align="center">
		<div class="div_container" style="width:700px;">
			<div class="div_container_title" style="height: 35px;">
				<font class="font_title">MODIFICAR ADMINISTRADOR</font>
			</div><br>

			<?php 
			$sql="SELECT 
					id_user,
					nombre,
					contrasenia,
					tipo,
					correo,
					celular
				FROM usuarios
				WHERE id_user='".$_POST["id_user"]."'";
				$res=mysqli_query($link,$sql);
				$row=mysqli_fetch_array($res);
			?>

			<div class="list-group" style="width: 90%;">
				<form action="buscarAdm.php" method="post" enctype="multipart/form-data">
					<div>
						<div class="form-group col-md-9 text-left">
							<label for="inputEmail4">Nombre de Usuario</label>
							<input type="text" class="form-control" id="nombre_usuario" name="nombre_usuario" placeholder="" value="">
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
							<input type="mail" class="form-control" id="correo" name="correo" placeholder="" value="">
						</div>
					</div>

					<div class="row">
						<div class="form-group  col-md-12 text-center">
							<input type="hidden" name="btn_modificar" value="modificar">
							<button type="submit" class="btn btn-default boton_color">Modificar<span>
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  								<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  								<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
								</svg></span>
							</button>
						</div>
					</div>			
				</form>
				<form action="sistema.php" method="post">
					<button type="submit" class="btn btn-default boton_color"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill=#597e8d class="bi bi-caret-left-square" viewBox="0 0 16 16">
  					<path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/> <path d="M10.205 12.456A.5.5 0 0 0 10.5 12V4a.5.5 0 0 0-.832-.374l-4.5 4a.5.5 0 0 0 0 .748l4.5 4a.5.5 0 0 0 .537.082z"/>
					</svg></span>Regresar					
					</button>
					
				</form>
				
			</div>


			
		</div>
		
	</div>
