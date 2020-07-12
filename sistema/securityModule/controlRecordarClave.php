<?php
class controlRecordarClave{

    public function recordarLogin($user){
        include_once("../modelos/usuario.php");
        $objUsuario =  new usuario;
        $respuesta = $objUsuario -> verificarUser($user);
        
        if($respuesta == 0){
            include_once("../shared/formMensaje.php");
			$objMensaje = new formMensaje;
			$objMensaje -> formMensajeShow("El usuario se encuentra deshabilitado o no se encuentra registrado","<a href='../index.php'>ir al inicio</a>");
        }
        else{
            
            include_once("./formVerificarCodigo.php"); 
            $correo = $objUsuario -> getCorreo($user);
            $codigo = $this -> generarCodigo();
            session_start();
            $_SESSION["usuario"] = $user;
            $_SESSION["codigo"] = $codigo;
            $_SESSION["correo"] = $correo;
            echo $codigo;
            $this -> enviarCodigo($codigo, $correo);
            $objVerificarCodigo = new formVerificarCodigo;
            $objVerificarCodigo -> formVerificarCodigoShow();
            
        }

    }

    public function verificarCodigo($codigoOficial, $codigoVerificar){
        if($codigoOficial == $codigoVerificar){
            include_once("./formCambiarClave.php"); 
            $objCambiarClave = new formCambiarClave;
            $objCambiarClave -> formCambiarClaveShow();
        }
        else{
            include_once("../shared/formMensaje.php");
            $objMensaje = new formMensaje;
            session_destroy();
			$objMensaje -> formMensajeShow("El código ingresado no es el correcto","<a href='../index.php'>ir al inicio</a>");
        }
    }

    public function enviarClave($clave){
        include_once("../modelos/usuario.php");
        include_once("../shared/formMensaje.php");
        $objUsuario =  new usuario;
        session_start();
        $user = $_SESSION["usuario"];
        $objUsuario -> updatePassword($clave,$user);
        $objMensaje = new formMensaje;
        session_destroy();
		$objMensaje -> formMensajeShow("La clave de acceso se actualizo correctamente ","<a href='../index.php'>ir al inicio</a>");
    }

    public function generarCodigo(){
        $codigo = mt_rand(10000,99999);
        return $codigo;
    }

    public function enviarCodigo($codigo, $correo){
        $asunto = "RECORDAR CLAVE DE ACCESO";
        $carta .= "Para poder continuar con el proceso de RECORDAR\n";
        $carta .= "CLAVE debe ingresar el siguiente codigo de verificacion\n";
        $carta .= "CODIGO:\t\t$codigo";
        if(mail($correo, $asunto, $carta)){
            return (1);
        }else{
            return $this->enviarCodigo($codigo, $correo);
        }
        
    }
}
?>
