<?php
class conexion
{
	protected function conectar()
	{
		mysql_connect("localhost","root","12345678");
		mysql_select_db("sistema");
	}
	
	protected function desconectar()
	{
		mysql_close();
	}
}
?>