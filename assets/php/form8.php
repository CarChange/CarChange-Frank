<?php
// Server Data
$servername = "localhost";
$username = "u427946632_luke";
$password = "fallout";
$dbname = "u427946632_teste";
//Form Data
//Fazer a linha de INSERT do SQL, completar com o nome da variável no HTML
//Parte 8 - Referências
//Pessoais:
$nome      = $_POST[""];    //Fazer em JS uma lógica para adicionar pessoas
$end       = $_POST[""];    //à lista de referências. Vamos pensar por enquanto
$telefone  = $_POST[""];    //que essas variáveis retornam vetores.

//Comerciais:
$endereco  = $_POST[""];
$telefone  = $_POST[""];

//Bancárias:
$banco       = $_POST[""];
$agencia     = $_POST[""];
$conta       = $_POST[""];
$cheque_esp  = $_POST[""];
$limite      = $_POST[""];

//Falta informações adicionais, como consta na documentação.

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
