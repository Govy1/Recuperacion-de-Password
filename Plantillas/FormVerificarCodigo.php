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
    
    <h1>Ingrese codigo de verificacion</h1>
    <div class="contenedor">
         <div class="input-contenedor">
         <i class="fas fa-user icon"></i>
         <input type="text" placeholder="ingrese Codigo" maxlength="30" minlength="4" pattern="^[a-zA-Z0-9_.-]*$" id=" "  required>
         </div>        
         <div class="input-contenedor">
         <input type="submit" value="enviar otra vez" class="button">
    </div>
    <div class="input-contenedor">
        <input type="submit" value="enviar" class="button">
            
     </div>
    </form>
</body>
</html>