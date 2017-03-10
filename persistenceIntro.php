<?php
// Server Data
$servername = "localhost";
$username = "u427946632_admin";
$password = "oseompenmf231";
$dbname = "u427946632_carc";
//Form Data
$nome          = $_POST["nome"];
$email         = $_POST["email"];
$telefone      = $_POST["telefone"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO `prospeccao`(`nome`, `telefone`, `email`) VALUES ('{$nome}','{$telefone}','{$email}')";

if ($conn->query($sql) === TRUE) {
    //Msg
    echo "<script>
        alert('Por favor, complete seu cadastro.');
        window.location.href='cadastro.html';
    </script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>