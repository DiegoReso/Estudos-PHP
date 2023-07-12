<?php 

$host = "localhost";
$user = "root";
$pass="";
$db = "cursophp";

$conn = new mysqli($host,$user,$pass,$db);

$nome = "caneta";

$stmt = $conn->prepare("SELECT * FROM produtos WHERE nome = ? ");

$stmt->bind_param("s", $nome);

$stmt->execute();

$result = $stmt->get_result();

$item = $result->fetch_row();

print_r($item);

$conn->close();