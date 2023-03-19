<?php
include ('valida_pagina.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST'){ //
    $archivo = $_FILES['archivo'];

if ($archivo['error']==UPLOAD_ERR_OK) {


    $id = $_SESSION['id_user'];

    if ($archivo["name"]=="ejercicio1.pdf"){
        $queryVacioPDF = "SELECT `pdf_1` FROM `registro_calificaciones` WHERE `users_id` =$id;";
    }else{
        $queryVacioPDF = "SELECT `pdf_2` FROM `registro_calificaciones` WHERE `users_id` =$id;";
    } 
    $result = mysqli_query($link, $queryVacioPDF);
    $data = mysqli_fetch_row($result);

    if ($data[0] != null){
        $response = array('mensaje'=>'Error: Ya resolviste esta actividad');
        echo json_encode($response);
    }else{
    
    $nombreArchivo = $archivo['name'];
    $rutaTemp = $archivo['tmp_name'];
    $rutaArchivo = 'pdfs/' . rand(1, 10000). $nombreArchivo;
    $urlDB = 'http://localhost:8000/'.$rutaArchivo;
    $fechaAlta = date('y-m-d');
    

    move_uploaded_file($rutaTemp, $rutaArchivo);

    if ($archivo["name"]=="ejercicio1.pdf"){
        $queryPDF = "UPDATE `registro_calificaciones` SET `pdf_1`='$urlDB' WHERE `users_id`=$id;";
    }else{
        $queryPDF = "UPDATE `registro_calificaciones` SET `pdf_2`='$urlDB' WHERE `users_id`=$id;";
    }
    $result = mysqli_query($link, $queryPDF);

    $response = array('mensaje' => 'Archivo guardado de forma correcta');
    echo json_encode($response);
    }
    
    }else {
    $response = array('mensaje' => 'Error al subir el archivo');
    echo json_encode($response);
    }
}

