<?php 

Class Car{

  public $rodas = 4;
  private $vidro = "sem pelicula";
  protected $portas = 4;


  public function getVidro(){
    return $this->vidro;
  }
  
  public function getPorta(){
    return $this->portas;
  }
  
}


class Mecanico{
  
  public function alterarRodas($obj){
    $obj->rodas=10;
  }
  
  public function colocarPelicula($carro,$pelicula){
    $carro->vidro = $pelicula;
  }
  
}


$carro = new Car;

echo $carro->rodas . "<br>";



$diego = new Mecanico;

$diego->alterarRodas($carro);

echo $carro->rodas;
// echo $carro->vidro;
// $diego->colocarPelicula($carro, "G20");

// echo $carro->vidro;


echo $carro->getVidro() ."<br>";


echo $carro->getPorta() ."<br>";
?>