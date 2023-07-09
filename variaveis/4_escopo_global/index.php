<?php 

  $teste = "teste";

  echo $teste;

  if(true){
    $teste = "testando";
  }
 echo "<hr>";
  echo $teste;  


  function funcao(){
    $teste = "arou";
    echo $teste;
  }
echo "<hr>";
funcao();
echo "<hr>";


function testeglobal(){
  //possivel utilizar a variavel teste usando o global
  global $teste;
  echo "$teste global funcao";
}

testeglobal()
?>