<?php 

class Humano{
  public const OLHOS = 2;
  public const BRACOS = 2;
  public const PERNAS = 2;

  function mostrarConstantes(){
    echo self::BRACOS . "<br>";
  }
}

$diego = new Humano;


echo $diego::BRACOS . "<br>";

$diego->mostrarConstantes();

?>