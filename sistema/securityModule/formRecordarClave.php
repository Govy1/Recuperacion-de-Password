<?php
class formRecordarClave
{
    public function formRecordarClaveShow(){
    ?>

    <head>
        <title>Recordar Clave</title> 
        <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
        <link rel="stylesheet" href="../styles/estilos.css">
    </head>  
    <body>
        <form class="formulario" action="getLogin.php" method="POST">
        <h1>Recuperar Password</h1>
        <div class="contenedor">
            <div class="input-contenedor">
            <i class="fas fa-user icon"></i>
            <input type="text" placeholder="ingrese usuario" maxlength="30" name = "txtUsuario">
            </div>
            <input type="submit" value="Recuperar" class="button">
        </div>
        </form>
    </body>

    <?
    }
}

?>