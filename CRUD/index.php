<?php

include("conexion.php");
$db = new Conexion();

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="post.php" method="post">
	<input type="text" name="nombre" placeholder="nombre">
	<input type="text" name="domicilio" placeholder="domicilio">
	<input type="text" name="telefono" placeholder="telefono">
	<input type="text" name="comentario" placeholder="comentario">
	<input type="hidden" name="accion" value="insert">
	<input type="submit" name="submit" value="enviar">
</form>
</body>
</html>