<?php

include("valida_pagina.php");

$actvandoBtn = ''; //variable para manejar las opciones del botón

if (isset($_POST["btn_registrarCurso"])) {

    $nombreCurso = $_POST["nombre_curso"];
    $fechaInicio = $_POST["fecha_inicio"];
    $fechaTermino = $_POST["fecha_termino"]; //obteniendo la info para la almacenar
    $duracionCurso = $_POST["duracion_curso"];
    $horasAlDia = $_POST["horas_al_dia_curso"];
    $horarioInicio = $_POST["horario_inicio_curso"];
    $horarioTermino = $_POST["horario_fin_curso"];
    // $instructorAsignado = $_POST["select"];
    $duracionCursoInt = (int)$duracionCurso;
    $horasAlDiaInt = (int)$horasAlDia;
    $nameValidate = false;
    $fechaInicioValidate = false;
    $fechaTerminoValidate = false;
    $duracionValidate = false;
    // $instructorValidate = false;
    $horasAlDiaValidate = false;
    $horarioValidate = false;

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

    // if ($instructorAsignado != '') {
    //     $instructorValidate = true;
    //     echo "Correcto";
    // } else {
    //     $instructorValidate = false;
    //     echo "Falta instructor";
    // }

    if ($horasAlDia <= 24){
        $horasAlDiaValidate = true;
        echo "Las horas deben de ser menor a 24 horas";
    }

    if ($horarioInicio <= $horarioTermino){
        $horarioValidate = true;
        echo "La hora de inicio tiene que ser mayor a la hora de finalización";
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
    $horasAlDia = $_POST["horas_dia_editar"];
    $horarioInicio = $_POST["horario_inicio_editar"];
    $horarioTermino = $_POST["horario_fin_editar"];
   
}

if (isset($_GET["id_eliminar_curso"])) {
    $actvandoBtn = 'Eliminar';
    $id_curso = $_GET["id_eliminar_curso"];
}

switch ($actvandoBtn) {

    case "Registrar":
        if ($nameValidate && $fechaInicioValidate && $fechaTerminoValidate && $duracionValidate && $horasAlDiaValidate) {

            $query = "INSERT INTO cursos (id,nombre,fecha_inicio,fecha_final,duracion, horas_dia, hora_inicio, hora_fin) VALUES (NULL, '$nombreCurso', '$fechaInicio', '$fechaTermino', '$duracionCurso', '$horasAlDia', '$horarioInicio', '$horarioTermino')";
            $result = mysqli_query($link, $query); //almacenamos en nuestra variable el resultado de la consulta

            $query = "SELECT id FROM cursos ORDER BY id DESC LIMIT 1";
            $result_ultimo = mysqli_query($link, $query);
            $id = mysqli_fetch_array($result_ultimo);
            $id = $id['id'];

            $query = "INSERT INTO `ejercicio_1`(`nombre_actividad`, `palabras_desordenadas`, `palabras_ordenadas`, `cursos_id`) VALUES ('ejercicio_1', 'uno', 'dos', $id);";
            $result_ejerUno = mysqli_query($link, $query);


            echo $result;

            if ($result) {
                echo '<script language= "javascript"> alert ("El registro se almaceno de forma correcta"); </script>';
            } else {
                echo '<script language= "javascript"> alert ("Ocurrio un error y no se logro realizar el registro"); </script>';
            }
            header("Location: regCursos.php?success=El curso se ha registrado correctamente");
        } else {
            $errorMessage = '';

            if ($nameValidate == '' and $fechaInicioValidate == '' and $fechaTerminoValidate == '' and $duracionValidate == '' and $instructorValidate == '' and $horasAlDiaValidate== '') {
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

            if (!$horasAlDiaValidate) {
                $errorMessage = "Las horas deben ser menores a 24 horas";
            }

            header("Location: regCursos.php?error=$errorMessage");

        }

        break;
    case "Editar":

        //Validar nombre
        if (!preg_match("|^[a-zñáéíóúA-ZÑÁÉÍÓÚ]+(\s*[a-zñáéíóúA-ZÑÁÉÍÓÚ]*)*[a-zñáéíóúA-ZÑÁÉÍÓÚ]+$|", $nombreCurso)) {
            $nameValidate = false;
            //echo "verificar nombre";
        } else {
            $nameValidate = true;
            //echo "El nombre está en un formato valido";
        }

        if ($nameValidate){
       
        $query = "UPDATE cursos SET nombre = '$nombreCurso', fecha_inicio = '$fechaInicio', fecha_final = '$fechaTermino', duracion = '$duracionCurso', horas_dia = '$horasAlDia', hora_inicio = '$horarioInicio', hora_fin = '$horarioTermino', instructor= '$instructorAsignado' WHERE id = $id_curso";
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
        // echo $instructorAsignado;
        echo $id_curso;


        }else {
            $errorMessage = '';

            // if ($nameValidate == '' and $fechaInicioValidate == '' and $fechaTerminoValidate == '' and $duracionValidate == '' and $instructorValidate == '' and $horasAlDiaValidate== '') {
            //     $errorMessage  = 'Todos los campos son requeridos';
            // }

            if (!$nameValidate) {
                $errorMessage = "El nombre no está en un formato valido";
            }

            // if (!$fechaInicioValidate) {
            //     $errorMessage = "La fecha de inicio es incorrecta";
            // }

            // if (!$fechaTerminoValidate) {
            //     $errorMessage = "La fecha de termino es incorrecta";
            // }

            // if (!$duracionValidate) {
            //     $errorMessage = "La duración no debe de ser menor a 8 horas";
            // }

            // if (!$horasAlDiaValidate) {
            //     $errorMessage = "Las horas deben ser menores a 24 horas";
            // }

            header("Location: editarCurso.php?error=" . $errorMessage ." & id_curso=".$id_curso);
        }

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
        $query = "DELETE FROM lista_cursos WHERE curso_id = $id_curso";
        $result = mysqli_query($link, $query);

        $query = "DELETE FROM calificaciones WHERE cursos_id = $id_curso";
        $result = mysqli_query($link, $query);

        $query = "DELETE FROM ejercicio_1 WHERE cursos_id = $id_curso";
        $result = mysqli_query($link, $query);
        
        $query = "DELETE FROM ejercicio_2 WHERE cursos_id = $id_curso";
        $result = mysqli_query($link, $query);
        
      

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





