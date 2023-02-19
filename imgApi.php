<?php
include ("valida_pagina.php");


$upload_dir = 'uploads/';
$server_url = 'http://localhost:8000';
$error = '';
$response = array(
    "status"=> "error",
    "error" => true,
    "message" => "No se logro la conexión"
);

if(isset($_POST["btn_guardarPregunta"])){
    if ((!empty($_POST['pregunta1'])) && (!empty($_POST['pregunta2'])) && (!empty($_POST['pregunta3'])) && (!empty($_POST['pregunta4']))){
        $actividad = $_POST['actividad'];
        $curso = $_POST['curso'];
        for ($i = 1; $i<=3; $i++){
            $pregunta[$i] = $_POST['pregunta' . $i];
            $respuesta_correcta[$i] = $_POST['opcionPregunta' . $i];
        }
    }


if (!empty($_FILES)){
    for ($i = 0; $i<=3; $i++){
        for ($j=1; $j<=4; $j++){
            $ipivote=$i+1;
            $jpivote=$j+1;
          $error = $_FILES['file'.$jpivote.'Pregunta'.$ipivote]['error'];  
        }
    }


    if($error>0) {
        $response = array(
            "status"=> "error",
            "error" => true,
            "message" => "Error al subir el archivo",
        );
    }else {
        $random_name_a = rand(1,1000000)."-".$respuesta_a['name'];
        $random_name_b = rand(1,1000000)."-".$respuesta_b['name'];
        $random_name_c = rand(1,1000000)."-".$respuesta_c['name'];
        $random_name_d = rand(1,1000000)."-".$respuesta_d['name'];

        $upload_name_a = $upload_dir.strtolower($random_name_a);
        $upload_name_b = $upload_dir.strtolower($random_name_b);
        $upload_name_c = $upload_dir.strtolower($random_name_c);
        $upload_name_d = $upload_dir.strtolower($random_name_d);


        if (move_uploaded_file($respuesta_a['tmp_name'],$upload_name_a) and move_uploaded_file($respuesta_b['tmp_name'],$upload_name_b) and move_uploaded_file($respuesta_c['tmp_name'],$upload_name_c)  and move_uploaded_file($respuesta_d['tmp_name'],$upload_name_d)){

            $url1=$server_url . "/".$upload_name_a;
            $url2=$server_url . "/".$upload_name_b;
            $url3=$server_url . "/".$upload_name_c;
            $url4=$server_url . "/".$upload_name_d;


            $resultado = mysqli_query($link, "INSERT INTO respuestas_ejercicio_2 (respuesta_a, respuesta_b, respuesta_c, respuesta_d) VALUES ('$url1', '$url2', '$url3', '$url4') ");
                  
            $cursos_id_tabla = mysqli_query($link, "SELECT id FROM cursos WHERE nombre='$curso'");
            $respuestas_id_tabla = mysqli_query($link, "SELECT id FROM respuestas_ejercicio_2 ORDER BY id DESC LIMIT 1");
            $cursos_id = mysqli_fetch_array($cursos_id_tabla);
            $respuestas_id = mysqli_fetch_array($respuestas_id_tabla);
            $cursos_id = $cursos_id['id'];
            $respuestas_id = $respuestas_id['id'];
            $sql = "INSERT INTO ejercicio_2 (nombre_actividad,pregunta,respuestas_id, respuesta_correcta, cursos_id, numero_pregunta) VALUES ('$actividad', '$pregunta', '$respuestas_id', '$respuesta_correcta', '$cursos_id', '$numero_pregunta')";


            $result = mysqli_query($link, $sql);


            $response = array (
                "status"=> "sucess",
                "error" => false,
                "message" => "Se subio correctamente",
                "urlImg1" => $url1,
                "urlImg2" => $url2,
                "urlImg3" => $url3,
                "urlImg4" => $url4,
                "result" => $result,
                "resultado" => $resultado,
            );
        }else{
            $response = array(
                "status"=> "error",
                "error" => true,
                "message" => "Error al subir el archivo"
            ); 
        }
    }

} else {
    $response = array(
        "status"=> "error",
        "error" => true,
        "message" => $_FILES,
        "descrption" => "No existen archivos" 
    );
}
    


echo json_encode($response);

}




