<?php
$compra=25;//estoy comprando 
$producto="ropa";//ropa o mascota;


print "el producto comprado es : $producto"."<br>";
print "el costo del producto es : $compra"."<br>";
/*
Ejercicio1
Si la compra del cliente es inferior a 20 soles podrán requerir 2 cosas:
• Si los productos son de mascotas se mostrará un mensaje: "No se puede realizar el envío".
• Si los productos son de ropa se le mostrará el siguiente mensaje: "Los gastos de envío son 5 soles".
*/

print "Si la compra del cliente es inferior a 20 soles podrán requerir 2 cosas:
• Si los productos son de mascotas se mostrará un mensaje: No se puede realizar el envío.
• Si los productos son de ropa se le mostrará el siguiente mensaje: Los gastos de envío son 5 soles"."<br>"."<br>";

if ($compra<20) {
	if ($producto=="mascota") {
		
		print "no se puede hacer el envio";
	}
	else
	{
		print "los gastos de envio son 5 soles";
	}
}


/*
Ejercicio2
Si la compra tiene un importe entre 20 y 30 soles se le indicará el mensaje: "Los gastos de envío son 5 soles".
*/
print "<br>";
print "<br>";
print "Si la compra tiene un importe entre 20 y 30 soles se le indicará el mensaje: Los gastos de envío son 5 soles"."<br>";

if (($compra>20) and ($compra<30)) {
	print "Los gastos de envío son 5 soles";
}


?>