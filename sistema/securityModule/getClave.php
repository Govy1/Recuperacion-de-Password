<?php

$newPass = $_POST['txtNewPass'];
$repeatPass = $_POST['txtRepeatPass'];

if(strlen($newPass) >= 4){
    if ($newPass == $repeatPass) {
        include_once("controlRecordarClave.php");
        $objRecordarClave = new controlRecordarClave;
        $objRecordarClave -> enviarClave($newPass);
    }
    else{
        include_once("../shared/formMensaje.php");
	    $objMensaje = new formMensaje;
	    $objMensaje -> formMensajeShow("Las contraseñas ingresadas no coinciden, inténtelo otra vez","<a href='../index.php'>ir al inicio</a>");
    }
}
else{
    include_once("../shared/formMensaje.php");
	$objMensaje = new formMensaje;
	$objMensaje -> formMensajeShow("La contraseña no cumple con la cantidad de caracteres requeridas","<a href='../index.php'>ir al inicio</a>");
}

?>