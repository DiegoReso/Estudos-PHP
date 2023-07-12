<?php 

$host = "localhost";
$user = "root";
$pass="";
$db = "cursophp";

$conn = new mysqli($host,$user,$pass,$db);

$table = "produtos";
$nome = "Xicara";
$descricao = "Muito Linda e muito Amada";

$q = "SELECT * FROM produtos";


$result = $conn->query($q);

$conn->close();

//Umresultado
$itens= $result->fetch_assoc();

$itensAll=$result->fetch_all();

print_r($itens);
echo "<br>";
print_r($itensAll);

?>