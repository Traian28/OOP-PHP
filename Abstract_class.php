<?php

abstract class Persona {
	public function Saludo(){
		return 'Hola';
	}
}

class Estudiante extends Persona {

}

$carlos = new Estudiante();
echo $carlos->saludo();


// echo $carlos->saludo(); arroja error porque no se puede acceder a una clase abstracta a menos de ser heredada.