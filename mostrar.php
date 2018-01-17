<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Mostrar Bandas</title>
</head>
<body>
<h1>Bandas que me gustan</h1>
<form method=POST action=nuevo.html>
<input type=submit value="NUEVA BANDA">
</form>
<?php
	$servidor = "localhost";
	$bd = "php_try";
	$contra = "feelingshitty";
	$usuario = "root";
	#conexion a la base de datos
	$conexion = mysqli_connect($servidor, $usuario,$contra, $bd) or die ("sorry,	 connection error");
	#escribir sentencia MYSQL a la base de datos
	$query = "select * from banda";
	#ejecucion de la sentencia a la base de datos
	$resultado = mysqli_query($conexion, $query);
	while($fila = mysqli_fetch_array($resultado)){
		echo "<hr>";
		echo "<a href='eliminar.php?idbanda=".$fila[0]."'>Eliminar Banda nro".$fila[0];
		echo "</a><p>Nombre de la banda: </p>".$fila[1]."<br><p>Año de fundacion: </p>".$fila[2]."<br><p>Obra maestra</p>".$fila[3];
		echo "<br><a href='editar.php?idbanda=".$fila[0]."'>Editar banda</a>";
	}
	echo 'ya no hay más resultados';

?>
</body>
</html>