<?php 

$host = "localhost";
$db= "cursophp";
$user ="root";
$pass="";

$conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);

$stmt = $conn->prepare("INSERT INTO  produtos (nome,descricao) VALUES (:nome, :descricao)");

$nome = "Mouse";
$descricao = "O melhor mouse da historia";


$stmt->bindParam(":nome", $nome );
$stmt->bindParam(":descricao", $descricao );

$stmt->execute();



?>