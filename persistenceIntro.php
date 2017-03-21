<?php
// Server Data
$servername = "localhost";
$username = "u427946632_admin";
$password = "oseompenmf231";
$dbname = "u427946632_carc";
//Form Data
$nome          = mb_strtoupper($_POST["nome"]);
$sobrenome     = mb_strtoupper($_POST["sobrenome"]);
$email         = $_POST["email"];
$telefone      = $_POST["telefone"];
$ddd           = $_POST["DDD"];
$tel_completo  = $ddd . $telefone;

$nome .= ' ' . $sobrenome;

//Probable error
$de  = "Duplicate entry";
$fke = "for key 'email'";

//ID cliente:
$surname = explode(' ', $sobrenome);
$lastname = $surname[count($surname)-1];
$id_cliente = '17C' . substr($telefone, -4) . $nome[0] . $lastname[0];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO `prospeccao`(`id_cliente`, `nome`, `telefone`, `email`) VALUES ('{$id_cliente}','{$nome}','{$tel_completo}','{$email}')";

if ($conn->query($sql) === TRUE) {
    //Msg
    echo "<script>
        alert('Obrigado pelo interesse! Logo um representante entrará em contato.');
        window.location.href='index.html';
    </script>";
} else if ((strpos($conn->error, $de) !== false) && (strpos($conn->error, $fke) !== false)){
    //Msg de email repetido
    echo "<script>
        alert('Atenção: E-mail já cadastrado.');
        window.location.href='index.html';
    </script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>