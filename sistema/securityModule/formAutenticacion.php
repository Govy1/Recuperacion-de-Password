<?php
class formAutenticacion
{
	public function formAutenticacionShow()
	{
		?>
    <!DOCTYPE html>
    <html lang="es">
		<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Autenticacion</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	  <link rel="stylesheet" href="./styles/estilos.css">
		</head>		
		<body>
		<form class="formulario" name="form1" method="post" action="./securityModule/getUsuario.php">
      <h1>Login</h1>
      <div class="contenedor">
          <div class="input-contenedor">
          <i class="fas fa-user icon"></i>
          <input type="text" placeholder="ingrese usuario" maxlength="30" minlength="4" pattern="^[a-zA-Z0-9_.-]*$" name="txtLogin" type="password" id="txtPassword" required>
          
          </div>
          
          <div class="input-contenedor">
          <i class="fas fa-key icon"></i>
          <input name="txtPassword" type="password" id="txtPassword" type="password" placeholder="Contraseña" required>
          
          </div>
          <input name="bntAceptar" type="submit" id="bntAceptar" value="Aceptar" class="button">
          <p>¿Se olvido su contraseña? <a class="link" href="./securityModule/indexRecordarClave.php">Recordar contraseña </a></p>
      </div>
		</form>
		</body>
		</html>
		<?
	}
}	
?>

