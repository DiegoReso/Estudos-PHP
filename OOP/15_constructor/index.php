<?php 

 class Car{
  public $portas;
  public $cor;
  public $marca;

  function __construct($portas, $cor,$marca){

    $this->portas = $portas;
    $this->cor = $cor;
    $this->marca = $marca;
    
  }

 }

 $ferrari = new Car(4,"vermelha","ferrari");

echo "O carro eh da marca $ferrari->marca, da cor $ferrari->cor e tem $ferrari->portas portas";
 
?>