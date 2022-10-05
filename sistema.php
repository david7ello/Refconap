<?PHP
include("valida_pagina.php")
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


 <?PHP
include("head.php")
?>

<?PHP
include("menu.php")
?>

<body class="fondo">
	

<div align="center">
	<img style="margin-top:-32px;" src="images/REFCONAP.png" width="15%" height="15%">
	
</div>
<div align="center">
	<div class="col-md-2 text-center"></div>
	<div class="col-md-8 text-center" >
		<div class="list-group" style="">
			<br>
			<div class="row">
				<div class="col-md-5 text-center" >
					<div class="thumbnail" style="height: auto;">
						<img src="images/REFCONAP.png" alt="Ejercicio 1" width="220px" height="170px%">


						<div class="caption">
							<h3> Ejercicio 1</h3>
							<p>Relación de columnas</p>
							<p>
								<div class="row">
									<div class="col-md-3 text-center"></div>
									<div class="col-md-6 text-center">
										<form action="_ALC/admin/index.php" class="" method="post" role="form" id="forms">
											<input type="hidden" id="nombre" name="nombre" value="<?PHP echo $_SESSION['nombre']; ?>">
											<input type="hidden" id="contrasenia" name="contrasenia" value="<?PHP echo $_SESSION['password']; ?>">
											<button name="boton" type="submit" class="btn btn-default boton_color">Entrar												
											</button>
										</form>
									</div>
										<div class="col-md-6 text-center"></div>
								</div>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-5 text-center">
					<div class="thumbnail" style="height:auto;">
						<img src="images/REFCONAP.png" alt="Ejercicio 2" width="220px" height="170px%">
						<div class="caption">
							<h3> Ejercicio 2</h3>
							<p>Coloca texto descriptivo</p>
								<p>
									<div class="row">
										<div class="col-md-3 text-center"></div>
										<div class="col-md-6 text-center">
											<form action="ejercicioDos.php" class="" method="post" role="form" id="forms">
												<input type="hidden" id="nombre" name="nombre" value="<?PHP echo $_SESSION['nombre']; ?>">
												<input type="hidden" id="contrasenia" name="contrasenia" value="<?PHP echo $_SESSION['password']; ?>">
												<button name="boton" type="submit" class="btn btn-default boton_color">Entrar</button>
											</form>
										</div>
										<div class="col-md-6 text-center"></div>
									</div>
								</p>
						</div>
					</div>
				</div>


			</div>
		</div>
	</div>
</div>
</body>


