<?php

class Persona {
	public static $dia = '7 de septiembre';

	public static function saludo($nombre = null){
		if ($nombre){
		return 'Hola, buen dia '. $nombre;
		} else {
			return 'Hola, buen dia';
		}
	}
}

// $carlos = new Persona();
// echo $carlos->saludo('Carlos');

// echo Persona::saludo();

echo Persona::saludo();
