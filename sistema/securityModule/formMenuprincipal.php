<?php
	class formMenuPrincipal
	{
		public function formMenuprincipalShow($privilegios)
		{
			?>
			<html>
			<head>
			<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
			<title>Menu Principal</title>
			</head>				
			<body>
				Sesion iniciada por: <?php echo $_SESSION['login'];?><br />
				<?php
				$num_privilegios = count($privilegios);
				for($i = 0; $i < $num_privilegios; $i++)
				{
				?>
					<form name="form1" method="post" action="<?php echo $privilegios[$i]['path']?>">
						<img src="../img/<? echo $privilegios[$i]['icono']?>" width="30" height="30">
						<input name="bntMenu" type="submit" id="bntMenu" value="<?php echo $privilegios[$i]['label']?>">
					</form>
				<?
				}
				?>			
			</body>
			</html>
			<?
		}
	}

?>


