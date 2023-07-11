<?php 

trait Objeto{

  public function teste(){
    echo "Testando trait de objeto <br>";
  }


}

trait Testando{
  
  public function traitTest(){
    echo "Esse metodo eh da trait Testando <br>";
  }
}

class Central{
  
  use Objeto;
  use Testando;
  
}

$x = new Central;

$x->teste();
$x->traitTest();
?>