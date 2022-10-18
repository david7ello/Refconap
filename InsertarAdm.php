<?php
include("valida_pagina.php");
$result = "";
$operacion ="";

if (isset($_GET["id_eliminar_usuario"])) {
	$operacion = 'Eliminar';
	$id_usuario = $_GET["id_eliminar_usuario"];
}

if (isset($_POST["btn_actualizarUsuario"])) {
    $actvandoBtn = 'Editar';
    $nombreCurso = $_POST["nombre_usuario_editar"];
    $fechaInicio = $_POST["fecha_inicio_editar"];
    $fechaTermino = $_POST["fecha_termino_editar"];
    $duracionCurso = $_POST["duracion_curso_editar"];
    $instructorAsignado = $_POST["select"];
    $id_curso = $_POST["id_curso_editar"];
}

if ($operacion == 'Eliminar'){
		$query = "DELETE FROM usuarios WHERE id_user = $id_usuario";
        $result = mysqli_query($link, $query);

        if ($result) {
            echo '<script language= "javascript"> alert ("El usuario se elimino de forma correcta"); </script>';
			header("Location: AgregarAdm.php?success=Se borro el usuario");
        } else {
            echo '<script language= "javascript"> alert ("Ocurrio un error y no se logro eliminar el usuario"); </script>';
        }

}



// Para agregar nuestros registros
if (isset($_POST["btn_guardar"]) and $_POST["btn_guardar"]== "guardar"){

	//$id_userAdm = $_POST['id_user'];
	$nombre = $_POST['nombre_usuario'];
	$apellidosAdm = $_POST['apellidos_adm'];
	$contrasenia = $_POST['contrasenia'];
	$celular=$_POST['celular'];
	$correo=$_POST['correo'];
	$rol= $_POST['rol'];
	date_default_timezone_set('America/Mexico_City');
	$fecha_alta = date('y-m-d');
	//$fecha = $_POST['fecha'];

	$nombreValidate = false;
	$apellidosAdmValidate = false;
	$contraseniaValidate = false;
	$celularValidate = false;
	$correoValidate = false;
	$rolValidate = false;

	if($rol<=0){
		$rolValidate = false;
	}else {
		$rolValidate = true;
	}
	
	if (!preg_match("|^[a-zñáéíóúA-ZÑÁÉÍÓÚ]+(\s*[a-zñáéíóúA-ZÑÁÉÍÓÚ]*)*[a-zñáéíóúA-ZÑÁÉÍÓÚ]+$|", $nombre)) {
        $nombreValidate = false;
        //echo "verificar nombre";
   } else {
        $nombreValidate = true;
        //echo "El nombre está en un formato valido";
    }

	if (!preg_match("|^[a-zñáéíóúA-ZÑÁÉÍÓÚ]+(\s*[a-zñáéíóúA-ZÑÁÉÍÓÚ]*)*[a-zñáéíóúA-ZÑÁÉÍÓÚ]+$|", $apellidosAdm)) {
        $apellidosAdmValidate = false;
        //echo "verificar nombre";
   } else {
		$apellidosAdmValidate = true;
        //echo "El nombre está en un formato valido";
    }

	if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])([A-Za-z\d$@$!%*?&]){8,15}+$|/", $contrasenia)) {
        $contraseniaValidate = false;
        //echo "verificar contraseña";
   } else {
		$contraseniaValidate = true;
        //echo "El nombre está en un formato valido";
    }

	if (!preg_match("/^[0-9]{10}$/", $celular)) {
        $celularValidate = false;
        //echo "verificar celular";
   } else {
		$celularValidate = true;
        //echo "El nombre está en un formato valido";
    }

	if (!preg_match("/^([a-zA-Z0-9\.]+@+[a-zA-Z]+(\.)+[a-zA-Z]{2,3})$/", $correo)) {
        $correoValidate = false;
        //echo "verificar correo";
   } else {
		$correoValidate = true;
        //echo "El correo está en un formato valido";
    }


	if ($nombreValidate && $apellidosAdmValidate && $contraseniaValidate && $celularValidate && $correoValidate && $rolValidate){
		// Consulta para realizar el ingreso de información
		$query = "INSERT INTO usuarios (nombre,apellidos,password,correo,celular,estatus,roles,fecha_alta, fecha_baja)
		VALUES ('".$nombre."', '".$apellidosAdm."', '".$contrasenia."', '".$correo."', '".$celular."', 'A', '".$rol."', '".$fecha_alta."','".NULL."')";
		$result = mysqli_query($link, $query);
		header("Location: AgregarAdm.php?success=El usuario se creo correctamente");
		} else {
			$errorMessage = "";
			if (!$nombreValidate){
				$errorMessage="El nombre es obligatorio";
			}elseif(!$apellidosAdmValidate){
				$errorMessage="El apellido es obligatorio";
			}elseif(!$contraseniaValidate){
				$errorMessage="La contraseña es obligatoria";
			}elseif(!$celularValidate){
				$errorMessage="El celular es obligatorio";
			}elseif(!$correoValidate){
				$errorMessage="El correo es obligatorio";
			}elseif(!$rolValidate){
				$errorMessage="El rol es obligatorio";
			}

			header("Location: AgregarAdm.php?error=$errorMessage");
		}

	
	// Validación para inserción de la información
	if(!$result){
	echo'<script language= "javascript"> alert ("Ocurrio un error y no se logro realizar el registro"); </script>';
	header("Location: AgregarAdm.php?error=$errorMessage");
	}
	else{
	echo'<script language= "javascript"> alert ("El registro se almaceno de forma correcta"); </script>';
	header("Location: AgregarAdm.php?success=El usuario se creo correctamente");
	}

}

?>








