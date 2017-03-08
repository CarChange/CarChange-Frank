<?php
// Server Data
$servername = "localhost";
$username = "u427946632_luke";
$password = "fallout";
$dbname = "u427946632_teste";
//Form Data
//Fazer a linha de INSERT do SQL, completar com o nome da variável no HTML
//Parte 7 - Patrimônios
//BD: entidades separadas para imóveis e carros
//Imóvel
$especie_imovel     = $_POST[""];
$end_imovel         = $_POST[""];
$data_aquis         = $_POST[""];
$valor_venal        = $_POST[""];
$valor_divida       = $_POST[""];

//Carro(s)
$marca   = $_POST[""];
$modelo  = $_POST[""];
$ano     = $_POST[""];


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
