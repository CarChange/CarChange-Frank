<?php
$servername = "localhost";
$username = "u427946632_luke";
$password = "fallout";
$dbname = "u427946632_teste";
$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO usuarios (nome, email, telefone) VALUES ($nome, $email, $telefone)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
