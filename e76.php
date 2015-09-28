<!DOCTYPE html>
<html lang="en">


	
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<style type="text/css"> 
	.numero {
	
	width:20px;
	text-align:center;
	border:solid 1px red;
	background-color:aqua;
	color:green;	
	
	}
	</style>
	<?php

echo '<p><b><u>Numero aleatorio entre 100 y 200 ambos incluidos</b></p></u>';
	
	$numero=rand(100,200);
	echo   '<p><textarea class=numero readonly>'.$numero. '</textarea></p>';


	?>
</body>
</html>