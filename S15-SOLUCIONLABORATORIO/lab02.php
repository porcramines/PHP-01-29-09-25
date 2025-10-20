<?php
/*
Ejercicio2
Crear un programa que permita leer el valor correspondiente a una distancia en kilómetros y las visualice expresada en metros.
*/
function distancia($kilometros)
{
	$metros=$kilometros*1000;
	return $metros;
}
$kilometros=50;
print "los kilometros son :".$kilometros."<br>";
print "los metros son:".distancia($kilometros);

?>