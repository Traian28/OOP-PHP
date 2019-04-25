<?php


class Persona {
	public $nombre;
	public $edad;
	public $pais;

	function __construct($nombre, $edad, $pais){
		$this->nombre = $nombre;
		$this->edad = $edad;
		$this->pais = $pais;
	}

	public function mostrarInfo(){
		echo $this->nombre . ' tiene ' . $this->edad . ' anios de edad y es de '. $this->pais;
	}
}

$carlos = new Persona ('Carlos', 23, 'Mexico');
$carlos->mostrarInfo();

echo '<br />';

$alejandro = new Persona ('Alejandro', 30, 'Argentina');
$alejandro->mostrarInfo();
