<?PHP
session_start();
if (!isset($link) or !$link) {
	include("db.php");
	$link = Conectarse_general();
}
$tipo = 0;
if (($_POST["correo"]) and ($_POST["password"])) {
	if (isset($_POST["correo"]) and isset($_POST["password"])) {
		$correo = $_POST['correo'];
		$password = $_POST['password'];
		$tipo = $_POST['tipo'];

		if ($_POST['tipo'] === "A") {
			$tipo = 1;
		}
		// Variables para el Captcha
		$ip = $_SERVER['REMOTE_ADDR'];
		$captcha = $_POST['g-recaptcha-response'];
		$secretKey = "6LeedbUhAAAAAPCh4Hw8DN3nupJsvzRYhulbQLlQ";
		// $respuesta=file_get_contents("URL: https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$captcha&remoteip=$ip");
		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_RETURNTRANSFER => 1,
			CURLOPT_URL => 'https://www.google.com/recaptcha/api/siteverify',
			CURLOPT_POST => 1,
			CURLOPT_POSTFIELDS => array(
				'secret' => $secretKey,
				'response' => $captcha
			)
		));
		$response = curl_exec($curl);
		curl_close($curl);
		if (strpos($response, '"success": true') !== FALSE) {
			$atributos = json_decode($respuesta, TRUE);
		} else {
			echo "<h3>Error</h3>";
		}
	}
}

// Para validar usuario por correo
$emailValidate = false;

if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
	$emailValidate = false;
} else {
	$emailValidate = true;
}

if (!$emailValidate) {
	$_SESSION["error_session"] = "El correo no está en un formato valido";
	header("Location:index.php");
}




//Valida si hay algun campo en blanco se regresa al LOGIN
if ($password == "" or $correo == "" or $captcha == "") {
	//error para un campo en blanco: usuario o contrasena.
	$_SESSION["error_session"] = "Hay algún campo en blanco.";
	//Regresa al LOGIN
	header("Location:index.php");
} else {

	// ! Validaccion para el acceso del ADMINISTRADOR
	if ($tipo == 1) {

		$sql = "SELECT * FROM usuarios WHERE correo = '$correo' and password = '$password' and roles = $tipo ";
		$res = mysqli_query($link, $sql);
		$row = mysqli_fetch_array($res);


		if ($row) {
			$_SESSION['tipo_usuario_inicio'] = 'OK';
			$_SESSION['tipo'] = $row["roles"];
			$_SESSION['id_user'] = $row["id_user"];
			$_SESSION['nombre'] = $nombre;
			$_SESSION['password'] = $password;
			header("Location:sistema.php");
		} else {
			$_SESSION['error_session'] = "Clave de Administrador y/o Contrase&ntilde;a  Incorrecta.";
			header("Location:index.php");
		}
	}
	// ! Validaccion para el acceso del INSTRUCTOR 
	if ($tipo == 'I') {

		$sql = "SELECT * FROM instructores WHERE correo = '$correo' and password = '$password' and tipo = 'INST' ";
		$res = mysqli_query($link, $sql);
		$row = mysqli_fetch_array($res);


		if ($row) {
			$_SESSION['tipo_usuario_inicio'] = 'OK';
			$_SESSION['tipo'] = $row["tipo"];
			$_SESSION['id_user'] = $row["id_user"];
			$_SESSION['nombre'] = $nombre;
			$_SESSION['password'] = $password;
			header("Location:sistema.php");
		} else {
			$_SESSION['error_session'] = "Clave de Instructor y/o Contrase&ntilde;a  Incorrecta.";
			header("Location:index.php");
		}
	}
	// ! Validaccion para el acceso del PARTICIPANTE
	if ($tipo == 'P') {

		$sql = "SELECT * FROM participantes WHERE correo = '$correo' and password = '$password' and tipo ='PART' ";
		$res = mysqli_query($link, $sql);
		$row = mysqli_fetch_array($res);


		if ($row) {
			$_SESSION['tipo_usuario_inicio'] = 'OK';
			$_SESSION['tipo'] = 'PART';
			$_SESSION['id_user'] = $row["id_user"];
			$_SESSION['nombre'] = $nombre;
			$_SESSION['password'] = $password;
			header("Location:sistema.php");
		} else {
			$_SESSION['error_session'] = "Clave de Participante y/o Contrase&ntilde;a  Incorrecta.";
			header("Location:index.php");
		}
	}
}
