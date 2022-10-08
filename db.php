<?php
//!============================== CONEX A LA BASE DE DATOS GENERAL ==============================
//FUNCION PARA LA CONECCION A LA BASE DE DATOS (SERVER, USUARIO, PASS)
function Conectarse_general()
{
	// $serv_activo = 1;

	// if ($serv_activo == 1) {
		// Dirección o IP del servidor MySQL
		$host = "localhost";
		// Puerto del servidor MySQL
		$puerto = "3306";
		// Nombre de usuario del servidor MySQL
		$usuario = "root";
		// Contraseña del usuario
		$contrasena = "";
		// Nombre de la base de datos
		$baseDeDatos = "refconap";
	// }
	// if ($serv_activo == 2) {
	// 	// Dirección o IP del servidor MySQL
	// 	$host = "localhost";
	// 	// Puerto del servidor MySQL
	// 	$puerto = "3306";
	// 	// Nombre de usuario del servidor MySQL
	// 	$usuario = "";
	// 	// Contraseña del usuario
	// 	$contrasena = "";
	// 	// Nombre de la base de datos
	// 	$baseDeDatos = "";
	// }

	if (!($link = mysqli_connect($host . ":" . $puerto, $usuario, $contrasena))) {
		echo "Error conectando a la base de datos.";
		exit();
	}
	if (!mysqli_select_db($link, $baseDeDatos)) {
		echo "Error al seleccionar la base de datos.";
		exit();
	}

	//Seleccionar la zona horaria (Mexico) correcta y no la del srvidor
	date_default_timezone_set('America/Mexico_City');

	//Atender los detalles de los acentos y la Ñ
	$link->query("SET CHARACTER SET utf8");

	return $link;
}
//!===============================================================================================

//!=============================== VALIDA LOS ACENTOS DE UN TEXTO ================================
function validar_acentos_G($nombre)
{
	//Validaciones para cambiar los caracteres no aceptados
    $except_n = array('ñ');
    $nombre = str_replace($except_n, 'Ñ', $nombre);
    
    $except_n = array('á');
    $nombre = str_replace($except_n, 'Á', $nombre);
    $except_n = array('é');
    $nombre = str_replace($except_n, 'É', $nombre);
    $except_n = array('í');
    $nombre = str_replace($except_n, 'Í', $nombre);
    $except_n = array('ó');
    $nombre = str_replace($except_n, 'Ó', $nombre);
    $except_n = array('ú');
    $nombre = str_replace($except_n, 'Ú', $nombre);

    $except_n = array('&');
    $nombre = str_replace($except_n, ' AND ', $nombre);

    $except = array('\\', '/', ':', '*', '?', '"', '<', '>', '|', '.',  ',');
    $nombre = str_replace($except, '', $nombre);

	return $nombre;
}
//!===============================================================================================

//!=================================== ACRONIMO DE UNA FRASE =====================================
function primer_letra_nombre_G($text)
{
	$arrayText = explode(" ", $text);
	$acronym = "";
	
	foreach ($arrayText as $word)   {
		$arrayLetters = str_split($word, 1);
		$acronym =  $acronym . $arrayLetters['0'];
	} 
	
	return $acronym ;
}
//!===============================================================================================

//!============================ SACA LA EXTENCION DE CUALQUIER ARCHIVO ===========================
//Funcion para extraer la extencion dle archivo
function extension_archivo_G($file)
{
	$res = explode(".", $file);
	$extension = $res[count($res) - 1];
	return $extension;
} //fin de la funcion
//!===============================================================================================

?>
