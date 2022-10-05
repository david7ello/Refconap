<?php 
include("valida_pagina.php");

if(isset($_POST["btn_modificar"]) and $_POST["btn_modificar"]=='modificar'){
	$id_user=$_POST['id_user'];
	$contrasenia=$_POST['contrasenia'];
	$nombre=$_POST['nombre_usuario'];
	$correo=$_POST['correo'];
	$celular=$_POST['celular'];

	echo $query = "UPDATE usuarios SET 
	id_user='".$id_user."',
	nombre='".$nombre."',
	contrasenia='".$contrasenia."',
	tipo='".$tipo."',
	celular='".$celular."',
	correo='".$correo."')";

	$result=mysqli_query(link($link, $query));

	if(!$result){
		echo'<script language= "javascript"> alert ("Ocurrio un error y no se logro realizar la actualización"); </script>';
	}

	else{
		echo'<script language= "javascript"> alert ("El registro se almaceno de forma correcta"); </script>';
	}

}

?>