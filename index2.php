<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<!--[if lt IE 9]>
<script type="text/javascript" src="http://info.template-help.com/files/ie6_warning/ie6_script_other.js"></script>
<script type="text/javascript" src="js/html5.js"></script>
<![endif]-->
</head>
<body id="page">
<div class="body1">
	<div class="body2">
		<div class="main">
<!-- header -->
			<header>
				<?php
					include ("includes/encabezado.php");
					include ("includes/menu.php");
				
					include ("includes/titulo.php");

				?>

			</header>
<!-- / header -->
<!-- content -->
		<?php include ("includes/contenido1.php"); ?>
		</div>
	</div>
</div>
<div class="body3">
	<div class="main">
		<?php include ("includes/contenido2.php");?>
<!-- / content -->
<!-- footer -->
		<?PHP
		//include("includes/pie.php");
		?>
<!-- / footer -->
	</div>
</div>
</body>
</html>
