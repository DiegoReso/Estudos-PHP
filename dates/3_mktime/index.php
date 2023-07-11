<?php


$data_nasc = mktime(02,12,33,04,22,1990);

echo $data_nasc . "<br>";

$dataNascimentoFormatada = date('d/m/Y', $data_nasc);

echo $dataNascimentoFormatada;

?>