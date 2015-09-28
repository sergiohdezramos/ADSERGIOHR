<!DOCTYPE html>
<html lang="en">	
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>


	<?php

echo '<p><b><u>Numero aleatorio entre 100 y 200 ambos incluidos</b></p></u>';
	
	$numero=rand(100,200);
	echo $numero;
	printf("%o",$numero) ;
	printf("%b ",$numero);
	printf("%x",$numero);

	?>
</body>
</html>