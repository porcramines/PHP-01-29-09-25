<?php
/*convertir la fecha 20/10/2025
20 de octubre del año 2025
*/
function hoydia($dia,$mes,$anio)
{

	switch ($mes) {
		case 1:
			$mes="Enero";
			break;
		case 2:
			$mes="Febrero";
			break;
		case 3:
			$mes="Marzo";
			break;
		case 4:
			$mes="Abril";
			break;
		case 5:
			$mes="Mayo";
			break;
		case 6:
			$mes="Junio";
			break;
		case 7:
			$mes="Julio";
			break;
		case 8:
			$mes="Agosto";
			break;
		case 9:
			$mes="Setiembre";
			break;
		case 10:
			$mes="Octubre";
			break;
		case 11:
			$mes="Noviembre";
			break;
		case 12:
			$mes="Diciembre";
			break;



	}
	$fechahoydia="$dia de $mes del año $anio ";
	return $fechahoydia;

}
print hoydia(20,10,2025)

?>