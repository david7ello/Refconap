<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
$response = array();

$host = "localhost";
// Puerto del servidor MySQL
$port = "3306";
// Nombre de usuario del servidor MySQL
$user = "root";
// Contraseña del usuario
$password = "";
// Nombre de la base de datos
$dbname = "refconap";

$con = mysqli_connect($host, $user, $password, $dbname);

$upload_dir = 'uploads/';
$server_url = 'http://localhost:8000';
$error = '';



if (!empty($_FILES)){
        $respuesta_a = $_FILES['file1'];
        $error = $respuesta_a['error'];
        $respuesta_b = $_FILES['file2'];
        $respuesta_c = $_FILES['file3'];
        $respuesta_d = $_FILES['file4'];

    if($error>0) {
        $response = array(
            "status"=> "error",
            "error" => true,
            "message" => "Error al subir el archivo"
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


            $realizado = mysqli_query($con, "INSERT INTO respuestas_ejercicio_2 (respuesta_a, respuesta_b, respuesta_c, respuesta_d) VALUES ('$url1', '$url2', '$url3', '$url4') ");
            
            $response = array (
                "status"=> "sucess",
                "error" => false,
                "message" => "Se subio correctamente",
                "urlImg1" => $url1,
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
        "message" => $_FILES
    );
}

echo json_encode($response);






