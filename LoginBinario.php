<?php

define("Sinpermisos",0);
define("Login",1);
define("Adempresa",2);
define("Adfactura",4);
define("Edempresa",8);
define("Edfactura",16);
define("Admin",32);

$user=Sinpermisos;

$user = Login;
if($user &Login)
{
echo "Bienvenido <br/>";
}

$user += Adempresa;
if($user & Adempresa)
{
	echo "Añadido los permisos de lectura de empresa<br/>";
	
}

else
{
	echo "No existen los permisos de lectura de empresa para este user<br/>";
}

$user += Adfactura;
if($user & Adfactura)
{
	echo "Permiso de lectura facturacion<br/>";
}
else
{
	echo "no existen los permisos de lectura facturacion para este user <br/>";
}

$user += Admin;
if($user & Admin)
{
	echo "Permisos de administrador <br/>";	
}

$user -= Adempresa;
if($user & Adempresa)
{
	echo "Sigue teniendo permisos de admisnistador de empresa";
}
else
{
	echo "No tiene permisos de admisnistador empresa<br/>";

}

if($user & Admin)
{
	echo "Si tiene permisos de super administrador<br/>";
	
}
else
{
	echo "No tiene permisos de super administrador<br/>";
}
?>