

<!DOCTYPE html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<title>Document</title>
		</head>
		<body>
         <b>
		<?php
  
	$a=mt_rand(-100,100);
	echo '<p> 1º número aleatorio es='. $a.'</p>';
  
  	$b=mt_rand(-100,100);
  	echo '<p> 2º número aleatorio es='. $b.'</p>';
  
  	$suma= $a+$b;
  	echo '<p> la suma de los dos números es='. $suma.' </p>';
	
  	$resta=$a-$b;
	
	echo '<p> la resta de los números aleatorios es ='.$resta.'</p>';

	$multiplicacion=$a*$b;
	echo '<p> la multiplicación de los números es='. $multiplicacion.'</p>';

	$division=$a/$b;
	echo '<p> la división de los números es='. $division.'</p>';
    
	$resto=$a%$b;
	echo '<p> el resto de los números es='. $resto.'</p>';


	echo '<p> el incremento de '.$a.' y decremento de '.$b.' es='.$a++.' y '.$b--.' <p>' ;
	echo '<p> el opuesto de '.$a.' y opuesto de '.$b.' es='.-$a.' y '.-$b.' <p>' ;





		
		?>
		</b>
		
		</body>
		</html>		
