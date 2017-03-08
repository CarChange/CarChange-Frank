<?php
// Server Data
$servername = "localhost";
$username = "u427946632_luke";
$password = "fallout";
$dbname = "u427946632_teste";
//Form Data
//Fazer a linha de INSERT do SQL, completar com o nome da variável no HTML
//Parte 6 - Fontes de Renda
$rendimento            = $_POST[""];
$rendimento_conj       = $_POST[""];
$rendimento_outros     = $_POST[""];
$outros_specs          = $_POST[""];    //multivalorado
//campo rendimento total pode ser feito via BD


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
