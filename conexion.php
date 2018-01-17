<?php
//MySQLi deprecated, instead, use PDO
$servidor = "localhost";
$usuario = "root";
$contra = "feelingshitty";
$bd = "php_try";
$conexion = mysqli_connect($servidor, $usuario, $contra, $bd)
	or die("Error en la conexion!");
 

//$id = $_POST["idbanda"];
	//localhost/teach/conexion.php?idbanda=valor
$nombre = $_POST["nombre"];
//$album = $_POST["album"];
//$fundacion = $_POST["fundacion"];
//$query = "select * from banda idbanda = $id";
//CODIGO MYSQL: select delete update insert
//$query = "select * from banda where nombre = '$nombre'";
// UPDATE mi_tabla SET columna = valor_deseado WHERE campo = restriccion
//$query = "update banda set album_maestro = '$album' where nombre = '$nombre'";
// INSERT INTO tabla (col1, col2, col3) VALUES (var1, var2 ,var3);
//$query = "insert into banda (nombre, fundacion, album_maestro) values ('$nombre',$fundacion, '$album')";
//DELETE FROM tabla WHERE col1 = restriccion;
$query = "delete from banda where nombre = '$nombre'";

$res = mysqli_query($conexion, $query);
//$resultado = mysqli_fetch_all($res,MYSQLI_ASSOC);
$resultado = mysqli_fetch_row($res);
echo var_dump($resultado);

?>
