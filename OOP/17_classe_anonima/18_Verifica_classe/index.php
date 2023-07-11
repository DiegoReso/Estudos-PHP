<?php 

class Humano{

  public $idade = 29;
  public $cor = "branco";
  public $altura = 1.78;

  public function falar(){}
  
}

if (class_exists("Humano")){
  echo "Classe existe <br>";
}


print_r(get_class_vars("Humano"));
print_r(get_class_methods("Humano"));
?>