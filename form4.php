<?php
// Server Data
$servername = "localhost";
$username = "u427946632_luke";
$password = "fallout";
$dbname = "u427946632_teste";
//Form Data
//Parte 4 - Dados do Cônjuge
$nome_conjuge           = $_POST[""];
$data_nasc_conjuge      = $_POST[""];
$naturalidade_conjuge   = $_POST[""];
$uf_conjuge             = $_POST[""];
$nacionalidade_conjuge  = $_POST[""];
$rg_conjuge             = $_POST[""];
$emissor_rg_conjuge     = $_POST[""];
$cpf_conjuge            = $_POST[""];
$empresa_conjuge        = $_POST[""];
$funcao_conjuge         = $_POST[""];
$tempo_serv_conjuge     = $_POST[""];
$telefone_conjuge       = $_POST[""];

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
