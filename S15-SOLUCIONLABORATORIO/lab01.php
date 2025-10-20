<?php

/*
Ejercicio1
Crear una función que permita calcular el cubo de un número
*/

function cubo($numero)
{
	$cubo=pow($numero, 3);
	return $cubo;
}
$numero=3;
print "el cubo del numero: ".$numero."<br>";
print " es:".cubo($numero);
?>