
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Aprendiendo php</title>
</head>
<body>
	<h1>Bandas</h1>
	<?php
	$servidor = "localhost";
	$usuario = "root";
	$contra = "feelingshitty";
	$bd = "php_try";
	$conexion = mysqli_connect($servidor, $usuario, $contra, $bd)
	or die("Error en la conexion!");
	$query = "select * from banda";
	$result = mysqli_query($conexion, $query);
	while($fila = mysqli_fetch_array($result)){
	echo "<p><strong>Nombre de la banda: </strong></p>".$fila[1]."</br>".
"<p><strong>Año de fundación: </strong></p>".$fila[2]."</br>".
"<p><strong>Obra maestra: </strong></p>".$fila[3]."</br><hr>";
}

	?>


</body>
</html>