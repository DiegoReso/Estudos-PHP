<?php 

$host = "localhost";
$user = "root";
$pass="";
$db = "cursophp";

$conn = new mysqli($host,$user,$pass,$db);

if($conn->connect_errno){
  echo "Erro na conexao";
  echo " Erro: " . $conn->connect_errno;
}

$sql = "SELECT * FROM produtos";

$result = $conn->query($sql);

print_r($result);

$conn->close();
?>