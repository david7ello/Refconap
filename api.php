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
// $request = explode('/', trim($_SERVER['PATH_INFO'],'/'));


if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}


switch ($method) {
  case 'GET':
    $sql = "select * from cursos";
    break;
  case 'POST':
    $post = json_decode(file_get_contents('php://input'), true);
    $actividad = $post['actividad'];
    $pregunta = $post['pregunta'];
    $respuesta_correcta = $post['correcta'];
    //Consulta
    $curso = $post['curso'];
    $cursos_id_tabla = mysqli_query($con, "SELECT id FROM cursos WHERE nombre='$curso'");
    $respuestas_id_tabla = mysqli_query($con, "SELECT id FROM respuestas_ejercicio_2 ORDER BY id DESC LIMIT 1");
    $cursos_id = mysqli_fetch_array($cursos_id_tabla);
    $respuestas_id = mysqli_fetch_array($respuestas_id_tabla);
    $cursos_id = $cursos_id['id'];
    $respuestas_id = $respuestas_id['id'];
    $sql = "INSERT INTO ejercicio_2 (nombre_actividad,pregunta,respuestas_id, respuesta_correcta, cursos_id) VALUES ('$actividad', '$pregunta', '$respuestas_id', '$respuesta_correcta', '$cursos_id')";


    break;

    //   $email = $_POST["email"];
    //   $country = $_POST["country"];
    //   $city = $_POST["city"];
    //   $job = $_POST["job"];

    //   $sql = "insert into contacts (name, email, city, country, job) values ('$name', '$email', '$city', '$country', '$job')"; 
    //   break;
}

// run SQL statement
$result = mysqli_query($con, $sql);

// die if SQL statement failed
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
  echo json_encode($result);
} else {
  echo mysqli_affected_rows($con);
}


$con->close();
