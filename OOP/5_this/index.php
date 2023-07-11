<?php 

class Animal{


  public $nome;

  function escolherNome($nome){
    $this->nome = $nome;
  }

  function latir(){
    return "au au <br>";
  }

  function latirForte(){
    return strtoupper($this->latir());
  }
}


$hanna = new Animal;


$hanna->escolherNome("Hanna");

echo $hanna->nome . "<br>";

echo $hanna->latir();

echo $hanna->latirForte();
?>