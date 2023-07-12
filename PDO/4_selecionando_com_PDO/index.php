<?php 

$host = "localhost";
$db= "cursophp";
$user ="root";
$pass="";

$conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);


$nome = "bicAtualizada";

$stmt = $conn->prepare("SELECT * FROM produtos WHERE nome = :nome");


$stmt->bindParam(":nome", $nome);

$stmt->execute();

$data = $stmt->fetch(PDO::FETCH_ASSOC);

print_r($data);

$itens = $stmt->fetchAll(PDO::FETCH_ASSOC);

print_r($itens);