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

<div class="imgCuadros">

</div>

<div align="center">
	<div class="col-md-2 text-center"></div>
	<div class="col-md-8 text-center" >
		<div class="list-group" >
			<br>
			<div class="row">
				<div class="col-md-5 text-center" style="background-size: contain; margin-right:30px; height:auto; background-image: url('../images/azul.jpg') ">
					<div>

						<div style="z-index:10; top:-5px;" class="caption">
							<h3> Ejercicio 1</h3>
							<p>Grupos de procesos</p>
							<p>
								<div class="row">
									<div class="col-md-3 text-center"></div>
									<div class="col-md-6 text-center">
										<form action="ejercicioUno.php" class="" method="post" role="form" id="forms">
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
				<div class="col-md-5 text-center" style="background-size: contain; height:auto; background-image: url('../images/morado.jpg') ">
					<div>
	
						<div style="z-index:10; top:-5px;" class="caption">
							<h3> Ejercicio 2</h3>
							<p>Preguntas y respuestas</p>
								<p>
									<div class="row">
										<div class="col-md-3 text-center"></div>
										<div class="col-md-6 text-center">
											<form action="ejercicioDos.php" class="" method="post" role="form" id="forms">
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


