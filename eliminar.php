<?php

$servidor = "localhost";
$usuario = "root";
$contra = "feelingshitty";
$bd = "php_try";

$conexion = mysqli_connect($servidor, $usuario, $contra, $bd) or die ("sorry for party rocking");

$id = $_GET["idbanda"];

$query = "delete from banda where idbanda = $id";
mysqli_query($conexion, $query);
header("Location: mostrar.php");

?>