<!DOCTYPE html>
<html>
<head>
	<title>Error al ingresar</title>

</head>
<body>
	<header>
		<div class="w3-container w3-black w3-center">
			<h1>BIENVENIDO A ONCE</h1>
		</div>
</header>

	<div class="w3-container w3-red">
		<h1><?php echo $_GET['mensaje'];?></h1>
		<a href="index.php">Volver a ingresar</a>
	</div>
</body>
</html>
