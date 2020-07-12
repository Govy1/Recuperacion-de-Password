<?php

$codigo = $_POST["codVerificar"];
session_start();
$codigoEnviado = $_SESSION['codigo']; 

if(isset($_POST['enviar'])){
    if( strlen($codigo) == 5){
        if($codigo == $codigoEnviado){
            include_once("controlRecordarClave.php");
            $objRecordarClave = new controlRecordarClave;
            $objRecordarClave -> verificarCodigo($codigo, $codigoEnviado);
        }else{
            include_once("../shared/formMensaje.php");
            $objMensaje = new formMensaje;
            $objMensaje -> formMensajeShow("El código ingresado no es el correcto","<a href='../index.php'>ir al inicio</a>");
        }
    }
    else{
        include_once("../shared/formMensaje.php");
        $objMensaje = new formMensaje;
        $objMensaje -> formMensajeShow("El código ingresado no cumple con las características o el campo se encuentra vacío","<a href='../index.php'>ir al inicio</a>");
    }
}
else{
    header('Location:../index.php');
}

?>
