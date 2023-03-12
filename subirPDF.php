<?php

$pdf = $_FILES['doc'];

$rutadestino = 'pdfs/'. rand(1,10000).$pdf['name'];

if (move_uploaded_file($pdf['tmp_name'], $rutadestino)){
    $response = array('mensage'=> 'Se subio correctamente');
}else {
    $response =array ('error' => 'No se subio');
}

echo json_encode($response);