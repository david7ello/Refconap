<?php
include ('valida_pagina.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST'){ //
    $archivo = $_FILES['archivo'];

if ($archivo['error']==UPLOAD_ERR_OK) {

    $id = $_SESSION['id_user'];

    $queryVacioPDF = "SELECT `pdf_2` FROM `registro_calificaciones` WHERE `users_id` =$id;";
    $result = mysqli_query($link, $queryVacioPDF);

    if ($result->num_rows !=0){
        $response = array('mensaje'=>'Error: Ya resolviste esta actividad');
        echo json_encode($response);
    }else{
    
    $nombreArchivo = $archivo['name'];
    $rutaTemp = $archivo['tmp_name'];
    $rutaArchivo = 'pdfs/' . rand(1, 10000). $nombreArchivo;
    $urlDB = 'http://localhost:8000/'.$rutaArchivo;
    $fechaAlta = date('y-m-d');
    

    move_uploaded_file($rutaTemp, $rutaArchivo);

    $queryPDF = "INSERT INTO `registro_calificaciones`(`pdf_2`, `fecha_alta_pdf_2`, `users_id`) VALUES ('$urlDB','$fechaAlta','$id');";
    $result = mysqli_query($link, $queryPDF);

    $response = array('mensaje' => 'Archivo guardado de forma correcta');
    echo json_encode($response);
    }
    
    }else {
    $response = array('mensaje' => 'Error al subir el archivo');
    echo json_encode($response);
}

}

