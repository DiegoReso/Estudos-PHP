<?php 

  $x = 10;
  
  
  switch($x){
    case 0:
      echo "x eh igual 0";
      break;
    case 1:
      echo "x igual a 1";
      break;
    default;
      echo "x nao eh igual a nenhum";
  }


  function compararNumeros($num1,$num2){
    
    if($num1 > $num2){
        echo "O primeiro numero é maior";
    }elseif($num2 > $num1){
        echo "O segundo número é maior";
    }elseif($num1 === $num2){
        echo "Os numeros são iguais";
    }
    
}

compararNumeros(10,20);

$age = 20;
$acesso = true;


function verificarAcesso($age, $acesso){
    
    if($age >= 18 && $acesso){
        echo "Acesso autorizado";
    }elseif ($age < 18) {
        echo "Acesso negado.Idade mínima requerida: 18 anos";
    }elseif($age >= 18 && !$acesso){
        echo "Acesso negado. Autorização necessária";
    }

}

verificarAcesso($age,$acesso);

function calcularDesconto($value,$category){
  if($category === "eletrônicos"){
      $finalvalue = $value -  ($value * 0.1);
      echo $finalvalue;
  }elseif ($category === "vestuário") {
      $finalvalue = $value -  ($value * 0.2);
      echo $finalvalue;
  }elseif($category === "alimentos"){
      $finalvalue = $value -  ($value * 0.05);
      echo $finalvalue;
  }elseif($category !== "alimentos" && $category !== "vestuário" && $category !== "eletrônicos"){
      echo $value;
  }
}

calcularDesconto(100,"produto");


function verificarCategoria($category){
if ($category === "eletrônicos") {
echo "Essa categoria é de produtos eletrônicos";
}elseif($category === "vestuário"){
echo "Essa categoria é de produtos vestuário";
}elseif($category === "alimentos"){
echo "Essa categoria é de produtos alimentos";
} else{
echo "Categoria Desconhecida";
}
}

verificarCategoria("vrau")

?>