<?php

class formVerificarCodigo
{
    public function formVerificarCodigoShow(){
        ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Verificar Codigo</title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	<link rel="stylesheet" href="../styles/estilos.css">
</head>  
<body>
    <form class="formulario" action="getCodigo.php" method="POST">
    <h1>Ingrese codigo de verificacion</h1>
    <div class="contenedor">
         <div class="input-contenedor">
         <i class="fas fa-user icon"></i>
         <input type="text" placeholder="ingrese Codigo"  name="codVerificar">
         </div>        
         <div class="input-contenedor">
    </div>
    <div class="input-contenedor">
        <input type="submit" value="enviar" class="button" name="enviar">
    </div>
    </form>
    <form action="get" method="post">
        <input type="submit" value="enviar otra vez" class="button">
    </form>
</body>
</html>
        <?
    }
}

?>