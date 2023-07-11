<?php 

class Carro{

  public $cor="red";
  public $modelo="bmw";
  public $velocidade_maxima=300;


  function setVelocidadeMaxima($valor){
    return $this->velocidade_maxima = $valor. "<br>";
  }

  function getVelocidadeMaxima(){
    return $this->velocidade_maxima;
  }

}

$carro = new Carro;

echo $carro->velocidade_maxima . "<br>";

echo $carro->setVelocidadeMaxima(250);

echo $carro->velocidade_maxima;

echo $carro->getVelocidadeMaxima();
?>