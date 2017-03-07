<?php
// Server Data
$servername = "localhost";
$username = "u427946632_luke";
$password = "fallout";
$dbname = "u427946632_teste";
//Form Data
//Adicionar dados ao form, completar com o nome no HTML
//Parte 1 - Identificação
$data_nasc     = $_POST[""];
$naturalidade  = $_POST[""];
$uf_nasc       = $_POST[""];
$est_civil     = $_POST[""];
$sexo          = $_POST[""];
$dependentes   = $_POST[""];
$cpf           = $_POST[""];
$rg            = $_POST[""];
$emissor_rg    = $_POST[""];
$profissao     = $_POST[""];
$nome_pai      = $_POST[""];
$nome_mae      = $_POST[""];

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
