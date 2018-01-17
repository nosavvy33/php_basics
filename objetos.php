<?php
/*
class Persona{
	public $nombre = "bruno";
	public $apellido = "leon";
	public $edad = 20;
	public $limeño = TRUE;
}

$ppl = new Persona();

echo $ppl->nombre."</br>";

echo var_dump($ppl);


*/



class Otrapersona{
	function Otrapersona($nombre, $apellido,$edad,$limeño){
			$this->nombre = $nombre;
			$this->apellido = $apellido;
			$this->edad = $edad;
			$this->limeño = $limeño;
	}
}

$another = new Otrapersona("Fulano","de tal",22,FALSE);
echo "<br>".$another->nombre;

?>