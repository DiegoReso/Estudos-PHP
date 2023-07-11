<?php 

interface Caracteristicas{
  
  const nome = "Matheus";
  public function falar();

}

class Humano implements Caracteristicas{
  
 public $idade = 29;
 
 public function falar(){
  echo "ola mundo <br>";
 }
  
 public function dizerNome(){
  echo "Meu nome eh ". self::nome. "<br>";
 }

}


$diego = new Humano;

$diego->falar();
$diego->dizerNome();

?>