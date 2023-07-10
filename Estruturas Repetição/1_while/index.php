<?php 

$x = 0;


while($x <10){
  echo "$x <br>";
  $x++;
}


$arr = ["Diego", 22, "Tata", 40, "Oksana", 20, "Dev", true];

$y =0;

while ($y < count($arr)) {
  
  if(is_string($arr[$y])){
    echo "$arr[$y] <br>";
  }

  $y++;
}


?>