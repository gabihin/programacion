<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>

<body>
<?php

	$nombre= "Gabriela";
	if (isset($_POST[ 'nombre'])) {
		$nombre=$_POST['nombre'];
	}
	echo "Hola, ".$nombre;



?>
 
<form action="index.php" method="post">
	<input type="text" name="nombre" placeholder="escribe tu nombre">
	<br>
	<input type="submit" value="enviar">

</body>
</html>