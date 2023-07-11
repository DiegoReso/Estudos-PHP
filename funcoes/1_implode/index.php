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


$arr1 = ["Diego" => 50, "Tata"=>45,"Oksana"=>80,"Teste"=>90];


arsort($arr1);

?>

<h1>Ranking</h1>

<ul>
  <?php foreach ($arr1 as $nome => $ponto):?>
  <li>
    <?= $nome ?> -> <?= $ponto?>
  </li>
  <?php endforeach;?>
</ul>