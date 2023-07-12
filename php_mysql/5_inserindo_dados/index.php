<?php 

$host = "localhost";
$user = "root";
$pass="";
$db = "cursophp";

$conn = new mysqli($host,$user,$pass,$db);

$table = "produtos";
$nome = "Xicara";
$descricao = "Muito Linda e muito Amada";

$q = "INSERT INTO $table (nome,descricao) VALUES ('$nome', '$descricao')";

$conn->query($q);

$conn->close();

?>