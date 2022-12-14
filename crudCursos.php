<?php

include("valida_pagina.php");

$actvandoBtn = ''; //variable para manejar las opciones del botón

if (isset($_POST["btn_registrarCurso"])) {

    $nombreCurso = $_POST["nombre_curso"];
    $fechaInicio = $_POST["fecha_inicio"];
    $fechaTermino = $_POST["fecha_termino"]; //obteniendo la info para la almacenar
    $duracionCurso = $_POST["duracion_curso"];
    $instructorAsignado = $_POST["select"];
    echo $instructorAsignado;
    $duracionCursoInt = (int)$duracionCurso;

    $nameValidate = false;
    $fechaInicioValidate = false;
    $fechaTerminoValidate = false;
    $duracionValidate = false;
    $instructorValidate = false;

    //Validar nombre
   if (!preg_match("|^[a-zñáéíóúA-ZÑÁÉÍÓÚ]+(\s*[a-zñáéíóúA-ZÑÁÉÍÓÚ]*)*[a-zñáéíóúA-ZÑÁÉÍÓÚ]+$|", $nombreCurso)) {
        $nameValidate = false;
        //echo "verificar nombre";
   } else {
        $nameValidate = true;
        //echo "El nombre está en un formato valido";
    }

    // Validar fecha inicio
    $dateNow = date("Y-m-d");

    if ($fechaInicio >= $dateNow) {
        $fechaInicioValidate = true;
        echo "La fecha está en un formato valido";
    } else {
        $fechaInicioValidate = false;
        echo "La fecha es anterior a la fecha actual";
    }

    // Validar fecha termino
    if ($fechaTermino >= $fechaInicio) {
        $fechaTerminoValidate = true;
        echo "La fecha está en un formato valido";
    } else {
        $fechaTerminoValidate = false;
        echo "La fecha es anterior a la fecha actual";
    }

    if ($duracionCurso < 8) {
        $duracionValidate = false;
        echo "La duración no puede ser menor a 8 horas";
    } else {
        $duracionValidate = true;
        echo "La duración está en un formato correcto";
    }

    if ($instructorAsignado != '') {
        $instructorValidate = true;
        echo "Correcto";
    } else {
        $instructorValidate = false;
        echo "Falta instructor";
    }

    $actvandoBtn = 'Registrar';
}

if (isset($_POST["btn_actualizarCurso"])) {
    $actvandoBtn = 'Editar';
    $nombreCurso = $_POST["nombre_curso_editar"];
    $fechaInicio = $_POST["fecha_inicio_editar"];
    $fechaTermino = $_POST["fecha_termino_editar"];
    $duracionCurso = $_POST["duracion_curso_editar"];
    $instructorAsignado = $_POST["select"];
    $id_curso = $_POST["id_curso_editar"];
}

if (isset($_GET["id_eliminar_curso"])) {
    $actvandoBtn = 'Eliminar';
    $id_curso = $_GET["id_eliminar_curso"];
}

switch ($actvandoBtn) {

    case "Registrar":
        if ($nameValidate && $fechaInicioValidate && $fechaTerminoValidate && $duracionValidate && $instructorValidate) {

            $query = "INSERT INTO cursos (id,nombre,fecha_inicio,fecha_final,duracion,instructor) VALUES (NULL, '$nombreCurso', '$fechaInicio', '$fechaTermino', '$duracionCurso', $instructorAsignado)";
            $result = mysqli_query($link, $query); //almacenamos en nuestra variable el resultado de la consulta

            if ($result) {
                echo '<script language= "javascript"> alert ("El registro se almaceno de forma correcta"); </script>';
            } else {
                echo '<script language= "javascript"> alert ("Ocurrio un error y no se logro realizar el registro"); </script>';
            }
            header("Location: regCursos.php?success=El curso se ha registrado correctamente");
        } else {
            $errorMessage = '';

            if ($nameValidate == '' and $fechaInicioValidate == '' and $fechaTerminoValidate == '' and $duracionValidate == '' and $instructorValidate == '') {
                $errorMessage  = 'Todos los campos son requeridos';
            }

            if (!$nameValidate) {
                $errorMessage = "El nombre no está en un formato valido";
            }

            if (!$fechaInicioValidate) {
                $errorMessage = "La fecha de inicio es incorrecta";
            }

            if (!$fechaTerminoValidate) {
                $errorMessage = "La fecha de termino es incorrecta";
            }

            if (!$duracionValidate) {
                $errorMessage = "La duración no debe de ser menor a 8 horas";
            }

            //if (!$instructorValidate) {
                //$errorMessage = "Verificar instructor";
            //}

            header("Location: regCursos.php?error=$errorMessage");

        }

        break;
    case "Editar":
        //TODO : Actualizar datos
        // $nombreCorrecto = false;
        // $fechaInicioCorrecto = false;
        // $fechaTerminoCorrecto = false;
        // $duracionCorrecto = false;

        // if ($nombreCurso != "") {
        //     $nombreCorrecto = true;
        // }
        // if ($fechaInicio != "") {
        //     $fechaInicioCorrecto = true;
        // }
        // if ($fechaTermino != "") {
        //     $fechaTerminoCorrecto = true;
        // }
        // if ($duracionCurso != 0 and $duracion != "") {
        //     $nombreCorrecto = true;
        // }

        // if ($nombreCorrecto == true and $fechaInicioCorrecto == true and $fechaTerminoCorrecto == true and $duracionCorrecto == true) {
        //     echo '<script language= "javascript"> alert ("Si son correctos"); </script>';
        // } else {
        //     echo '<script language= "javascript"> alert ("No son correctos"); </script>';
        // }

        $query = "UPDATE cursos SET nombre = '$nombreCurso', fecha_inicio = '$fechaInicio', fecha_final = '$fechaTermino', duracion = '$duracionCurso', instructor='$instructorAsignado' WHERE id = $id_curso";

        $result = mysqli_query($link, $query);

        if ($result) {
            echo '<script language= "javascript"> alert ("El Curso se actualizo de forma correcta"); </script>';
        } else {
            echo '<script language= "javascript"> alert ("Ocurrio un error y no se logro actualizar el curso"); </script>';
        }
        header("Location:regCursos.php");

        echo 'text';
        echo $nombreCurso;
        echo $fechaInicio;
        echo $fechaTermino;
        echo $duracionCurso;
        echo $instructorAsignado;
        echo $id_curso;


        break;

    case "Seleccionar":
        $sentSQL = $conectarBD->prepare("SELECT * FROM cursos WHERE idcurso=:identif");
        $sentSQL->bindParam(':identif', $idCur);
        $sentSQL->execute();
        $consUno = $sentSQL->fetch(PDO::FETCH_LAZY);

        $curso = $consUno['curso'];
        $fIni = $consUno['fecha_inicio'];
        $fTer = $consUno['fecha_fin'];
        $duracion = $consUno['duración'];
        break;

    case "Eliminar":
        $query = "DELETE FROM cursos WHERE id = $id_curso";
        $result = mysqli_query($link, $query);

        if ($result) {
            echo '<script language= "javascript"> alert ("El Curso se elimino de forma correcta"); </script>';
        } else {
            echo '<script language= "javascript"> alert ("Ocurrio un error y no se logro eliminar el curso"); </script>';
        }

        header("Location:regCursos.php");
        break;

    case "X":
        header("Location:regCursos.php");
        break;
}

// // Consultar la información de la BD
// $sentSQL = $conectarBD->prepare("SELECT * FROM cursos");
// $sentSQL->execute();
// $consultaReg = $sentSQL->fetchAll(PDO::FETCH_ASSOC);



