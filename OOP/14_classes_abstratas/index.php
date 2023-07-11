<?php 

  abstract class Teste{

    public static function testandoClasse(){
      echo "Este metodo eh de uma classe abstrada <br>";
    }
   
    
    abstract public function testeAbs();

  }

  Teste::testandoClasse();


  class Nova extends Teste{

    public function testeAbs()
    {
      echo "teste metodo abstrato";
    }
    
  }


$n = new Nova;

$n->testeAbs();
  
?>