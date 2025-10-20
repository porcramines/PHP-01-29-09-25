<?php
/*
el menor de 3 numeros
*/

function menor($a,$b,$c)
{
	if(($a<$b)and($b<$c))
	{
		$menor=$a;
	}
	if(($b<$a)and($a<$c))
	{
		$menor=$b;
	}
	if(($c<$a)and($a<$b))
	{
		$menor=$a;
	}
return $menor;
}
print menor(5,6,7);

?>