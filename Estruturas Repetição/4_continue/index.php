<?php 

$a = 10;


while($a > 0){
  
  if($a == 5 || $a == 7){

    echo "Pulou a execucao $a<br>";
    $a--;
    continue;
  }

  echo "Executando $a <br>";
  $a--;
}

?>