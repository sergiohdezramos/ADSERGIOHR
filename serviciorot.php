<?php


$cadena= $_GET ['cadena']

$palabra='hola';
$longitud=strlen ($palabra);

for ($i = 0; $i <= $longitud; $i++) {
	$letra=$palabra[$i];
	if (ord($letra)+13<=ord('z')) {
		$cadena.=chr(ord($letra)+13);
	}
		else
		$cadena.=chr(ord($letra)+13-26);	
		
}
echo $cadena;
?>

adsergiohr.freeiz.com -----> La web 