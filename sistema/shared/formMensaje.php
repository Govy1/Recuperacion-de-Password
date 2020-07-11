<?php
class formMensaje
{
	public function formMensajeShow($mensaje,$link)
	{
	?>
	<!DOCTYPE html>
    <html lang="es">
		<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Mensaje</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	    <link rel="stylesheet" href="../styles/estilos.css">
	</head>
	<body>
    <form class="formulario">
    <h1>Mensaje </h1>
    <div class="input-Mensaje">
    <p>
        <h2><?php echo strtoupper($mensaje);?></h2>
    </p>
    </div>
	<br>
	<center><?php echo $link; ?></center>
	<br>
    </form>
</body>
	<?php
	}
}
?>

