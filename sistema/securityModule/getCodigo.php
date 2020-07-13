<?php

$codigo = trim($_POST["codVerificar"]);

if(isset($_POST["enviar"])){  
    if( strlen($codigo) != 5){
        include_once("../shared/formMensaje.php");
        $objMensaje = new formMensaje;
        $objMensaje -> formMensajeShow("El código ingresado no cumple con las características o el campo se encuentra vacío","<a href='../index.php'>ir al inicio</a>");
    }
    else{
        include_once("controlRecordarClave.php");
        $objRecordarClave = new controlRecordarClave;
        $objRecordarClave -> verificarCodigo($codigo);
    }
}
else{
    header('Location:../index.php'); 
}

?>
