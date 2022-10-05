<?php
include("valida_pagina.php");

// Para agregar nuestros registros
if (isset($_POST["btn_guardar"]) and $_POST["btn_guardar"]== "guardar"){

	$nombre = $_POST['nombre_usuario'];
	$id_user = $_POST['id_user'];
	$contrasenia = $_POST['contrasenia'];
	$celular=$_POST['celular'];
	$correo=$_POST['correo'];
	$fecha = $_POST['fecha'];

// Consulta para realizar el ingreso de información
	$query = "INSERT INTO usuarios (id_user,nombre,contrasenia,fecha,tipo,celular,correo)
	VALUES ('".$id_user."', '".$nombre."', '".$contrasenia."', '".$fecha."', 'ADMIN', '".$celular."', '".$correo."' )";
	$result = mysqli_query($link, $query);
	
// Validación para inserción de la información
	if(!$result){
	echo'<script language= "javascript"> alert ("Ocurrio un error y no se logro realizar el registro"); </script>';
	}

	else{
	echo'<script language= "javascript"> alert ("El registro se almaceno de forma correcta"); </script>';
	}

}

?>








