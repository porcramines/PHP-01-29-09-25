<?php
/*
Ejercicio4
Determinar e imprimir el valor absoluto de un número entero
*/
function absoluto($n)
{
	$valor=abs($n);
	return $valor;
}
$numero=-20.66;
print "el valor absoluto del numero:".$numero."<br>";
print "es:".absoluto($numero);
?>