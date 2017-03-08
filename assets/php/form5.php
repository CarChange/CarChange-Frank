<?php
// Server Data
$servername = "localhost";
$username = "u427946632_luke";
$password = "fallout";
$dbname = "u427946632_teste";
//Form Data
//Parte 5 - Atividades Comerciais
$nome                 = $_POST[""];
$cnpj                 = $_POST[""];
$end                  = $_POST[""];
$insc_est             = $_POST[""];
$fone                 = $_POST[""];
$registro             = $_POST[""];
$data_reg             = $_POST[""];
$capital_inic         = $_POST[""];
$nm_ultima_alt        = $_POST[""];
$data_ultima_alt      = $_POST[""];
$capital_atual        = $_POST[""];
$particip_per         = $_POST[""];
$nm_cotas             = $_POST[""];
$valor                = $_POST[""];
$demais_socios        = $_POST[""];
$ramo_atividades      = $_POST[""];
$retirada_pro_labore  = $_POST[""];

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
