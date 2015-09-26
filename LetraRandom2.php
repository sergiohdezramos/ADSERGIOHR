
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<b>

	<?php

$n="Retamar";
print substr($n,rand(0,strlen($n)-1),1);
?>

	
	
 </b>
	
</body>
</html>

otra forma

$nombre = "sergio";
$longitud = strlen($name); // me da un número 
$random = rand(0, $largo - 1);// otro número 
$sustraer = substr($name, $random, 1);
print $sustraer;
