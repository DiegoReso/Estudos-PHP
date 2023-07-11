<?php 

class Humano{

  public $idade = "29";
  public $pego = 78;
  public $cor = "preto";
  
  public function falar(){
    echo "Oinnn <br>";
  }

}


class Professor extends Humano{
  
  public $altura = 178;

}

$diego = new Humano;
$prof = new Professor;
$diego->falar();
$prof->falar();

echo $prof->altura;
?>