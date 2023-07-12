<?php 

$host = "localhost";
$user = "root";
$pass="";
$db = "cursophp";

$conn = new mysqli($host,$user,$pass,$db);

$stmt = $conn->prepare("UPDATE produtos SET nome = ? WHERE descricao = ?");

$nome = "arou";
$descricao = "caneta bic muito boa";


$stmt->bind_param("ss", $nome, $descricao);

if($stmt->error){
  echo "Erro " . $stmt->error;
}