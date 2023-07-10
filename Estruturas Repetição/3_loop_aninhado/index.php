<?php 

$i = 0;


while($i < 3){
  echo "Loop externo $i <br>";

  $j = 1;

  while($j <= 5){
    echo "Loop interno $j <br>";

    $j++;
  }

  
  $i++;
}


?>