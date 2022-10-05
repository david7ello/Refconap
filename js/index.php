<?php
	session_start(); 
	if($_SESSION['sesion'] != 1){
		$_SESSION['error_session'] = "REQUIERE AUTENTIFICACI&Oacute;N.";
		header("Location:../index.php");
	}else{
		header("Location:../index.php");
	}
?>
