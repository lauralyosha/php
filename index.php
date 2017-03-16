<!DOCTYPE html>
<html>
<head>
	<title>Clase programación 16 de Marzo</title>
	<meta charset="utf-8">
</head>
<body>
<?php
	$nombre= "Laura";
	if (isset($_POST['nombre'])) {
		$nombre=$_POST['nombre'];
	}
	
	echo "Hola ".$nombre;
?>

<form action="index.php" method="post">
	<input type="text" name="nombre" placeholder="escribe tu nombre">
	<br>
	<input type="submit" value="enviar">

</form>
</body>
</html>