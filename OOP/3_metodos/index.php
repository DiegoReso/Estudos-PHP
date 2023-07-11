<?php

use Pessoa as GlobalPessoa;

class Pessoa{
  
  function falar(){
    echo "Ola, eu sou um objeto <br>";
  }

  function somar($x,$y){
    echo $x + $y;
  }

}

$diego = new Pessoa;

$diego->falar();
$diego->somar(3,110);

?>