<?php
include("valida_pagina.php");
$result = "";
$operacion ="";

if (isset($_GET["id_eliminar_usuario"])) {
	$operacion = 'Eliminar';
	$id_usuario = $_GET["id_eliminar_usuario"];
}

if (isset($_POST["btn_actualizarUsuario"])) {
    $operacion = 'Editar';
	$nombre = $_POST['nombre_usuario'];
	$apellidosAdm = $_POST['apellidos_adm'];
	$contrasenia = $_POST['contrasenia'];
	$celular=$_POST['celular'];
	$correo=$_POST['correo'];
	$rol= $_POST['rol'];
	$id_user = $_POST['id_user_editar'];
}

if ($operacion=='Editar'){
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
	$query = "UPDATE `usuarios` SET `nombre`='$nombre',`apellidos`='$apellidosAdm',`password`='$contrasenia',`correo`='$correo',`celular`='$celular',`roles`='$rol' WHERE id_user=$id_user;";
	$result = mysqli_query($link, $query);
	}else{
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

	if ($result) {
		echo '<script language= "javascript"> alert ("El Curso se actualizo de forma correcta"); </script>';
		header("Location: AgregarAdm.php?success=El usuario se actualizo correctamente");
	} else {
		echo '<script language= "javascript"> alert ("Ocurrio un error y no se logro actualizar el curso"); </script>';
	}
	//header("Location:AgregarAdm.php");

}

if ($operacion == 'Eliminar'){
		$queryListaCurso = "DELETE FROM lista_cursos WHERE user_id = $id_usuario";
		$result = mysqli_query($link, $queryListaCurso);
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
	$idCurso=$_POST['curso'];
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

		if($idCurso!=""){
			$queryUsuario = "SELECT id_user FROM usuarios ORDER BY id_user DESC LIMIT 1;";
			$id_user = mysqli_query($link, $queryUsuario);
			$id_user = mysqli_fetch_array($id_user);
			$id_user = $id_user['id_user'];
			$query = "INSERT INTO lista_cursos(curso_id, user_id) VALUES ($idCurso,$id_user)";
			$result_id = mysqli_query($link, $query);
			
			$query = "SELECT id FROM ejercicio_1 WHERE cursos_id=$idCurso";
			$result_e1 = mysqli_query($link, $query);
			$idE1 = mysqli_fetch_array($result_e1);
			$idE1 = $idE1['id'];

			$query = "SELECT id FROM ejercicio_2 WHERE cursos_id=$idCurso";
			$result_e2 = mysqli_query($link, $query);
			$idE2 = mysqli_fetch_array($result_e2);
			$idE2 = $idE2['id'][0];

			$query ="INSERT INTO calificaciones (usuarios_id, cursos_id, ejercicio_1, ejercicios_2) VALUES ($id_user, $idCurso, $idE1, $idE2)";
			$result_calificaciones = mysqli_query($link, $query);

			$query = "INSERT INTO registro_calificaciones (users_id) VALUES ($id_user);";
			$result_registro_cal = mysqli_query($link, $query);
		}
		

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








