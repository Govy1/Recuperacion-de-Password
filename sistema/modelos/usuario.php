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
}
?>