<?php 

$arr = ['carro', 'bicicleta', 'aviao'];

$teste = implode("-", $arr);

echo "$teste <br>";


function name($name,$lastname){
  
  echo $name ." ".  $lastname;
  echo "<br>";
}


name("Diego","Reis");



function quadrado($number){
  return $number * $number;
}

$x = quadrado(10);

echo $x . "<br>";

?>