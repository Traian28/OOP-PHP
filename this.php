<?php

class Persona {
	public $nombre;
	public $edad;
	public $pais;

	public function mostrarInfo(){
		echo $this->nombre . ' tiene ' . $this->edad . ' anios de edad y es de '. $this->pais;
	}
}

$carlos = new Persona;
$carlos->nombre = 'Carlos Arturo';
$carlos->edad = 23;
$carlos->pais = 'Mexico';

$carlos->mostrarInfo();

echo '<br />';


$alejandro = new Persona;
$alejandro->nombre = 'Alejandro';
$alejandro->edad = 30;
$alejandro->pais = 'Argentina';

$alejandro->mostrarInfo();

