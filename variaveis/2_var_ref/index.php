<?php 

$x = 10;

$y =& $x;

echo $x;
echo "<br>";
echo $y;

$y = 15;
echo "<hr>";
//atribuicao apos ref
echo "<br>";
echo $x;
echo "<br>";
echo $y;

?>