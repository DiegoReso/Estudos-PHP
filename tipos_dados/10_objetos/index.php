<?php 

class Pessoa {
  
  function falar(){
    echo "Ola Pessoal";
  }
}

$diego = new Pessoa();

$diego->nome = "Diego";

echo $diego->nome;
echo "<br>";
$diego->falar();




?>