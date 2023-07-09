<?php 

  $carro = [
    'marca' => 'BMW',
    'rodas' => 4,
    'teto_solar'=> true,
    'velocidade_max'=> 300,
    'blindado'=>false
  ];

  print_r($carro);
  echo "<br>";
  $marca = $carro['marca'];
  $velocidade_max = $carro['velocidade_max'];

  echo "O carro da marca $marca pode chegar ate $velocidade_max Km/h em 2 segundos"



  
?>