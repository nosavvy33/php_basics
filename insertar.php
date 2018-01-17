<?php
	$servidor = "localhost";
	$usuario = "root";
	$contra = "feelingshitty";
	$bd = "php_try";
	$conexion = mysqli_connect($servidor, $usuario, $contra, $bd);

	$nombre = $_POST["nombre"];
	$fundacion = $_POST["fundacion"];
	$album_maestro = $_POST["album_maestro"];

	$query = "insert into banda (nombre, fundacion, album_maestro) values ('$nombre',$fundacion, '$album_maestro')";
	mysqli_query($conexion, $query);
	header('Location: mostrar.php');
?>