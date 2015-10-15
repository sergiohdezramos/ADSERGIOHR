
<?php  

function burbuja($array, $n) {
    for ($i = 1; $i < $n; $i++) {
      for ($j = 0; $j < $n - $i; $j++) {
        if ($array[$j] > $array[$j + 1]) {
          $k = $array[$j + 1]; 
          $array[$j + 1] = $array[$j]; 
          $array[$j] = $k;
        }
      }
    }
 
    return $array;
  }

  $array = array mt_rand(0,100);
  $bubble = bubbleSort($array, count($array));

   echo "<p>Array desordenado: </p>";
 
  for ($i = 0; $i < count($array); $i++) {
    echo $array[$i] ." ";
  }
 
  echo "<p>Array ordenado: </p>";
 
  for ($i = 0; $i < count($bubble); $i++) {
    echo $bubble[$i] ." ";
  }
 

?>