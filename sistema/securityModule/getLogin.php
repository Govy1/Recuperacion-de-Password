<?php
$user = trim($_POST['txtUsuario']);

if(strlen($user) < 4)
{
    include_once("../shared/formMensaje.php");
    $objMensaje = new formMensaje;
	$objMensaje -> formMensajeShow("El usuario ingresado no cumple con la cantidad de caracteres ","<a href='../index.php'>ir al inicio</a>");
}
else {
    include_once("controlRecordarClave.php");
    $objRecordarClave = new controlRecordarClave;
    $objRecordarClave -> recordarLogin($user);
}
?>