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
          include ("conectar/decimo.php");
          ?>
				<?php
					include ("includes/encabezado.php");
          ?>
          <p>
          	<?php
					include ("includes/menu.php");
					include ("includes2/contenido1.php");

				?>

			</header>
