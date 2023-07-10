<?php 

// $arr = [1,2,3,4,5,6,7,8,9,10];

// foreach ($arr as $number) {
//   echo "Os numeros sao : $number <br>";
// }





//     function evenNumbers($int){
    
//     $soma = 0;

//     for ($i = 1; $i <= $int; $i++) {
        
//         if($i % 2 === 0){
            
//           $soma = $soma + $i;
//           echo "$i <br>";
//         }
       
//     }
//     echo "A soma dos pares: $soma <br>";
// }

// evenNumbers(50);


// function countVowels($string) {
//   $vowels = ['a', 'e', 'i', 'o', 'u'];
//   $count = 0; 

//   $string = strtolower($string);


//   for ($i = 0; $i < strlen($string); $i++) {
      
//       if (in_array($string[$i], $vowels)) {
//           $count++; 
//       }
//   }

//   return $count;
// }

// $string = "Hello World";
// echo countVowels($string); // Saída: 3


// function sumDigits($number) {
//   $sum = 0; // Inicializa a variável de soma

//   // Converte o número para uma string
//   $numberStr = (string) $number;

//   // Percorre cada dígito do número
//   for ($i = 0; $i < strlen($numberStr); $i++) {
//       // Obtém o dígito atual convertendo-o novamente para um número inteiro
//       $digit = (int) $numberStr[$i];

//       // Incrementa a soma com o dígito atual
//       $sum += $digit;
//   }

//   return $sum; // Retorna a soma dos dígitos
// }

// // Exemplo de uso da função
// $number = 12345;
// echo sumDigits($number); // Saída: 15

function isPrime($number) {
  if ($number < 2) {
      return false; // Números menores que 2 não são primos
  }

  // Percorre os números de 2 até a raiz quadrada do número fornecido
  for ($i = 2; $i <= sqrt($number); $i++) {
      if ($number % $i == 0) {
          return false; // Encontrou um divisor, o número não é primo
      }
  }

  return true; // Não encontrou nenhum divisor, o número é primo
}

// Exemplo de uso da função
$number = 17;
if (isPrime($number)) {
  echo "$number é um número primo";
} else {
  echo "$number não é um número primo";
}

?>