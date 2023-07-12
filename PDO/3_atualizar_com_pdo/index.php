<?php 

$host = "localhost";
$db= "cursophp";
$user ="root";
$pass="";

$conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);

$nome = "bicAtualizada";
$descricao = "caneta bic muito boa";

$stmt = $conn->prepare("UPDATE produtos SET nome = :nome WHERE descricao = :descricao ");


$stmt->bindParam(":nome", $nome);
$stmt->bindParam(":descricao", $descricao);

$stmt->execute();