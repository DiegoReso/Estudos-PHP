<?php 

$i = 0;

$arr = [10,20,30,40,50,60,70,80,90,100];


while($i < count($arr)){
  
  if($arr[$i] === 30 || $arr[$i] === 40){

    echo "Pulou a execucao<br>";
    $i++;
    continue;
  }

  echo "Executando <br>";
  $i++;
}

?>