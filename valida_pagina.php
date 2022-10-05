<?php
session_start();

if ($_SESSION['tipo_usuario_inicio'] != 'OK') {
    $_SESSION['error_session'] = "Requiere iniciar sesión para ver la página web.";
    header("Location:index.php");
}
//Validación para verificar si existe la conección con la BD, de lo contrario la reanuda
if (!isset($link) or !$link) {
    include("db.php");
    $link = Conectarse_general();
}

?>