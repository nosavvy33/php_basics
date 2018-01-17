<?php

#if

$nombre = "Bruno";
$edad = 20;
#operadores de condicion
# < > == <= >=
if($edad > 18){
	echo "ya eres legal :v";
}else{
	echo "eres DNI amarillo :V";
}



# $edad = 20;
#while
while($edad--){
	echo "<br>".$edad;
}





# $nombre = "Bruno";
# strlen() == String.length()
#do-while
$lar = strlen($nombre);
echo $lar;
do{
	echo "<br>".$nombre[$lar];
}while($lar--);






$lar = strlen($nombre);
for($i = $lar ; $i >= 0 ; $i--){
	echo "<br>".$nombre[$i];
}



?>