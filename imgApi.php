<?php



$upload_dir = 'uploads/';
$server_url = 'http://localhost:8000';
$error = '';
$response = array(
    "status"=> "error",
    "error" => true,
    "message" => "No se logro la conexión"
);

if(isset($_POST["btn_guardarPregunta"])){



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
    
}

echo json_encode($response);






