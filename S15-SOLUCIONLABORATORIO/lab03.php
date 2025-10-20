<?php
/*
Ejercicio3
Crear una función que calcule cual es el número menor de dos números enteros.


*/
function menor($n1,$n2)
{
	$mensaje="";
	if ($n1<$n2) {
		$mensajes="el numero: ".$n1." es  menor que ".$n2;
	}
	else{
		if ($n1>$n2) {
			$mensajes="el numero: ".$n2." es  menor que ".$n1;
		}
		else
		{
			if ($n1==$n2) {
				$mensajes="el numero: ".$n1." es  igual que ".$n2;
			}
		}

	}
	return $mensajes;
}
$n1=60;
$n2=30;
print "los numeros:".$n1." y ".$n2."<br>";
print "son: ".menor($n1,$n2);
?>