<?php
//de mayor a menor
$a=mt_rand(0,100);
$b=mt_rand(0,100);
$c=mt_rand(0,100);

if($a>$b){
	if($a>$c)
	{
		//a es el mayor
		if($b>$c){
			echo $a." ".$b." ".$c;
		}else
		 echo $a." ".$c." ".$b;

	}else
	//c es el mayor y b el menor
	echo $c." ".$a." ".$b;
}else if($b>$c){
	//b es el mayor
	if($a>$c){
		echo $b." ".$a." ".$c;
	}else
	echo $b." ".$c." ".$a;
}else 
echo $c." ".$b." ".$a;


?>