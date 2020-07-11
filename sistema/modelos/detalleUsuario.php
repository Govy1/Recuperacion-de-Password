<?
include_once("conexion.php");
class detalleUsuario extends conexion
{
	public function obtenerPrivilegios($login)
	{
		$this -> conectar();
		$consulta = "SELECT P.label, P.path, P.icono 
		             FROM usuarios U, privilegios P, detalleUsuarios DU
					 WHERE U.login = '$login' AND 
					       U.login = DU.login AND
						   P.id = DU.id";
		$resultado = mysql_query($consulta);
		$num_registros = mysql_num_rows($resultado);
		$this -> desconectar();
		for($i = 0; $i < $num_registros; $i++)
			$fila[$i] = mysql_fetch_array($resultado);
		return ($fila);
	}
}
?>