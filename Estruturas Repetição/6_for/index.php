<?php 

$arr = [10,"Diego",55,"Tata"];

for ($i=0; $i < count($arr) ; $i++) { 
  echo "$arr[$i] <br>";
}


$arr1 = [];

for ($i = 0; $i < 10 ; $i++) { 
  array_push($arr1, $i);
}

print_r($arr1);
echo "<br>";

$arr2 = [];

for ($i=10; $i <= 20 ; $i++) { 
    array_push($arr2, $i);
  }


print_r($arr2);

echo "br>";

for ($i=0; $i < count($arr2) ; $i++) { 
  if($arr2[$i] % 2 != 0){
    echo "Numero impar $arr2[$i] <br>";
  }
}



?>