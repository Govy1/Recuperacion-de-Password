<?php

class formCambiarClave{

    public function formCambiarClaveShow(){

        ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title></title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <link rel="stylesheet" href="../styles/estilos.css">
</head>  
<body>
    <form class="formulario" action="getClave.php" method="POST">
    
    <h1>Cambiar Contraseña</h1>
    <div class="input-contenedor">
    <i class="fas fa-key icon"></i>
         <input type="password" placeholder="ingrese Password" name='txtNewPass'>
    </div>     
    <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
         <input type="password" placeholder="Confirme Contraseña" name='txtRepeatPass'>
    </div>
         <input type="submit" value="Grabar" class="button" name="btnGrabar">
     </div>
    </form>
</body>
</html>
        <?

    }
}
?>