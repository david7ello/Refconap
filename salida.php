<?PHP

session_start();

$_SESSION['tipo_usuario_inicio']= '';
$_SESSION['super_admin']= '';
$_SESSION['tipo_usuario']=0;

$_SESSION['clave']=0;
$_SESSION['nombre']=0; 
$_SESSION['contrasena_emp']=0;
$_SESSION['correo_1']=0;
$_SESSION['contrasena_actua']=0;
$_SESSION['error_session']=0;

session_destroy();
header("Location:index.php")

?>