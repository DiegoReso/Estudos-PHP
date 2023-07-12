<?php 


$host = "localhost";
$user = "root";
$pass="";
$db = "cursophp";


$conn = new mysqli($host,$user,$pass,$db);

$nome = "Xicara";

$stmt = $conn->prepare("DELETE FROM produtos WHERE nome = ?");


$stmt->bind_param("s", $nome );

$stmt->execute();

$conn->close();