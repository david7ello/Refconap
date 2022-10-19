<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
// Dirección o IP del servidor MySQL
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

$method = $_SERVER['REQUEST_METHOD'];

$cursos_id = "";



if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

switch ($method){
    case 'GET':
        $respuestas_id = $ejercicio_2_array->$respuestas_id;
        $sql = "SELECT * FROM `respuestas_ejercicio_2` WHERE id='$respuestas_id'";
        $result = mysqli_query($con, $sql);
        break;

    case 'POST':
        $cursos_id = file_get_contents('php://input');
        $sql_id_curso = "SELECT id FROM cursos WHERE nombre='$cursos_id'";
        $result_curso_id = mysqli_query($con, $sql_id_curso);
        $id_curso_array = mysqli_fetch_array($result_curso_id);
        $id_curso = $id_curso_array['id'];
        $sql = "SELECT * FROM ejercicio_2 WHERE cursos_id='$id_curso' ORDER BY id DESC LIMIT 1";
        $result = mysqli_query($con, $sql);
        $ejercicio_2_array = mysqli_fetch_object($result);
       
        break;
}

if (!$result) {
    http_response_code(404);
    die(mysqli_error($con));
  }
  
  if ($method == 'GET') {
    echo '[';
    for ($i = 0; $i < mysqli_num_rows($result); $i++) {
      echo ($i > 0 ? ',' : '') . json_encode(mysqli_fetch_object($result));
    }
    echo ']';
  } elseif ($method == 'POST') {
    echo json_encode($ejercicio_2_array);
  } else {
    echo mysqli_affected_rows($con);
  }
  
  
  $con->close();