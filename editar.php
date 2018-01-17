<!DOCTYPE html>
<html>
<head>
	<title>Editando...</title>
</head>
<body>
<form method=POST action=guardareditar.php>
<?php
	$servidor = "localhost";
	$usuario = "root";
	$contra = "feelingshitty";
	$bd = "php_try";
	$conexion = mysqli_connect($servidor, $usuario, $contra, $bd) or die("erro de conexion");

	$id = $_GET["idbanda"];

	$query = "select * from banda where idbanda = $id";
	$resultado = mysqli_query($conexion, $query);
	$elemento = mysqli_fetch_row($resultado);
	/*$nombre = $elemento[1];
	echo var_dump($elemento);
	echo "<br>".$nombre;*/
	echo "<label>Nombre de la banda: </label><input type=text name=nombre value='".$elemento[1]."'><br><label>Fundacion de la banda: </label><input type=text name=fundacion value='".$elemento[2]."'><br><label>Obra maestra de la banda: </label><input type=text name=album_maestro value='".$elemento[3]."'><input type=hidden name=idbanda value=".$elemento[0].">";


?>
<br><input type="submit" value="Guardar Edición">
</form>
</body>
</html>

