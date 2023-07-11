<?php 

  $pessoa = new class(){
    
    public $nome= "Diego"; 

    public function dizerNome(){
      echo "Ola meu nome eh $this->nome <br>";
    }
    
  };

  echo $pessoa->nome . "<br>";

  $pessoa->dizerNome() . "<br>";

?>