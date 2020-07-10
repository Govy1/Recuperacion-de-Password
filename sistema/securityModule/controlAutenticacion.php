<?php

class controlAutenticacion
{
	public function verificarUsuario($login,$password)
	{
		include_once("../modelos/usuario.php");
		$objUsuario = new usuario;
		$respuesta = $objUsuario -> validarUsuario($login,$password);
		//echo $respuesta;
		if ($respuesta == 0)
		{
			include_once("../shared/formMensaje.php");
			$objMensaje = new formMensaje;
			$objMensaje -> formMensajeShow("Error, el usuario no existe, el password es incorrecto o el usuario esta deshabilitado, contacte con el administrador del sistema","<a href='../index.php'>ir al inicio</a>");
		}
		else
		{
			include_once("../modelos/detalleUsuario.php");
			include_once("formMenuPrincipal.php");
			$objMenu = new formMenuPrincipal;
			$objDetalle = new detalleUsuario;
			$privilegios = $objDetalle -> obtenerPrivilegios($login);
			//session_start();
			$_SESSION['login'] = $login;			
			$objMenu -> formMenuPrincipalShow($privilegios);
		}
	}
}
?>
