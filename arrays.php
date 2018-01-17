<?php



#revisar el sgte link https://www.w3schools.com/php/php_ref_array.asp


#array!!!
#array();
/*
$arr = array("este","es",1,"arreglo",TRUE);

echo $arr[3];
*/
//echo $arr.length();





#array asociativo
#similar al json, cada valor tiene su llave

$arr = array("primero" => "hola soy el primero", "segundo" => 123, "tercero" => TRUE);


echo $arr["tercero"]."<br>";


//echo var_dump($arr);



#este es un comentario
//este es un comentario
/*
este
es
un
comentario
*/

foreach ($arr as $key => $value) {
	echo "<br>llave ".$key." valor: ".$value;
}



?>