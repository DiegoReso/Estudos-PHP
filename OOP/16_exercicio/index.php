<?php 

class Cachorro{

  public $raca;
  public $idade;
  public $nome;

  function __construct($raca,$idade,$nome){
    $this->raca = $raca;
    $this->idade = $idade;
    $this->nome = $nome;
  }


  public function getAnimal(){
    echo "o nome do animal é $this->nome e tem $this->idade anos de idade :) <br>";
  }

}

$hanna = new Cachorro("vira-lata",6,"Hanna");

$hanna->getAnimal();

$raca = "Poodle";
$idade = 40;
$nome = "Wendy";

$wendy = new Cachorro($raca,$idade,$nome);
$wendy->getAnimal();


?>