<?php

	$servidor = "localhost";
	$usuario = "root";
	$contra = "feelingshitty";
	$bd = "php_try";
	$conexion = mysqli_connect($servidor, $usuario, $contra, $bd);

	$nombre = $_POST["nombre"];
	$fundacion = $_POST["fundacion"];
	$album_maestro = $_POST["album_maestro"];
	$idbanda = $_POST["idbanda"];

	$query = "update banda set nombre= '$nombre', fundacion=$fundacion, album_maestro= '$album_maestro' where idbanda = $idbanda";
	mysqli_query($conexion, $query);
	header('Location: mostrar.php');




?>