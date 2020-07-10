<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title></title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	<link rel="stylesheet" href="estilos.css">
	

</head>  
<body>
    <form class="formulario">
    
    <h1>Login</h1>
     <div class="contenedor">
         <div class="input-contenedor">
         <i class="fas fa-user icon"></i>
         <input type="text" placeholder="ingrese usuario" maxlength="30" minlength="4" pattern="^[a-zA-Z0-9_.-]*$" id=" "  required>
         
         </div>
         
         <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
         <input type="password" placeholder="Contraseña" required>
         
         </div>
         <input type="submit" value="Inicie sesion" class="button">
         <p>¿Se olvido su contraseña? <a class="link" href="registrarvista.html">Recordar contraseña </a></p>
     </div>
    </form>
</body>
</html>