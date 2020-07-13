<?
include_once("conexion.php");
class usuario extends conexion
{
	public function validarUsuario($login,$password)
	{
		$this -> conectar();
		$consulta = "SELECT login FROM usuarios WHERE login = '$login' AND password ='$password' AND estado = 1";
		$resultado = mysql_query($consulta);
		$num_registros = mysql_num_rows($resultado);
		$this -> desconectar();
		if($num_registros == 1)
			return (1);
		else
			return(0);
	}

	public function verificarUser($user){
		$this -> conectar();
		$consulta = "SELECT login FROM usuarios WHERE login = '$user' AND estado = 1";
		$resultado = mysql_query($consulta);
		$num_registros = mysql_num_rows($resultado);
		$this -> desconectar();
		if($num_registros == 1)
			return (1);
		else
			return(0);
	}

	public function getCorreo($user){
		$this -> conectar();
		$consulta = "SELECT correo FROM usuarios WHERE login = '$user' AND estado = 1";
		$correo = mysql_query($consulta);
		$num_registros = mysql_num_rows($correo);
		$this -> desconectar();
		$fila = mysql_fetch_array($correo);
		return $fila[0];
	}

	public function updatePassword($password, $user){
		$this -> conectar();
		$consulta = "UPDATE usuarios SET password = '$password' WHERE login = '$user'";
		mysql_query($consulta);
		$this -> desconectar();
	}
}
?>