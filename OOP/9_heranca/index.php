<?php   

class Humano{

  public $idade = 29;
  
  public function falar(){
    echo "Ola Mundo <br>";
  }

  private function gritar(){
    echo "PHP eh mt bom";
  }


  public function getGritar(){
    $this->gritar();
  }

  protected function falarBaixinho(){
    echo "lalala <br>";
  }

  public function getFalarBaixinho(){
    $this->falarBaixinho();
  }
  
  
}

class Programador extends Humano{
  
}

$diego = new Humano;

$diego->falar();
$diego->getGritar();

$tata = new Programador;

$tata->getFalarBaixinho();

?>