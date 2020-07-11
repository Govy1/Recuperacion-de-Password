<?php
if(isset($_POST['bntAceptar']))
{
	$login = trim($_POST['txtLogin']);
	$password = trim($_POST['txtPassword']);
	if(strlen($login)>=4 and strlen($password)>=4)
	{
		include_once("controlAutenticacion.php");
		$objControlAutenticacion = new controlAutenticacion;
		$objControlAutenticacion -> verificarUsuario($login,$password);
	}
	else
	{
		include_once("../shared/formMensaje.php");
		$objMensaje = new formMensaje;
		$objMensaje -> formMensajeShow("Error, los datos enviados no son correctos�. Vuelva a intentar","<a href='../index.php'>ir al inicio</a>");
	}
}
else
{
	include_once("../shared/formMensaje.php");
	$objMensaje = new formMensaje;
	$objMensaje -> formMensajeShow("Se ha detectado un acceso no permitido","<a href='../index.php'>ir al inicio</a>");
}
?>
