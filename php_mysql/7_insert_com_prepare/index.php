<?php 

$host = "localhost";
$user = "root";
$pass="";
$db = "cursophp";

$conn = new mysqli($host,$user,$pass,$db);

$nome = "Suporte de microfone";
$descricao = "O suporte e novo e foi fabricado na china";

$stmt = $conn->prepare("INSERT INTO produtos (nome,descricao) VALUES (?,?)");

$stmt->bind_param("ss",$nome, $descricao); //s=string, i=integer, d=double

$stmt->execute();