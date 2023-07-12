<?php 

$host = "localhost";
$user = "root";
$pass="";
$db = "cursophp";

$conn = new mysqli($host,$user,$pass,$db);

$id = "caneta";
$stmt = $conn->prepare("SELECT * FROM produtos WHERE nome = ? ");

$stmt->bind_param("s", $id);

$stmt->execute();

$result = $stmt->get_result();

$data = $result->fetch_all();

print_r($data);