<?php
// Server Data
$servername = "localhost";
$username = "u427946632_luke";
$password = "fallout";
$dbname = "u427946632_teste";
//Form Data
//Fazer a linha de INSERT do SQL, completar com o nome da variável no HTML
//Parte 2 - Endereço
$rua       = $_POST[""];
$bairro    = $_POST[""];
$cidade    = $_POST[""];
$uf        = $_POST[""];
$cep       = $_POST[""];
$tempo     = $_POST[""];
$telefone  = $_POST[""];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//$sql = "INSERT INTO usuarios (nome, email, telefone) VALUES ('{$nome}','{$email}','{$telefone}')";

if ($conn->query($sql) === TRUE) {
    //Msg
    echo "<script>
        alert('Cadastro continuado com sucesso!');
        window.location.href='index.html';
    </script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
