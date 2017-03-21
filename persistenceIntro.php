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
$ddd           = $_POST["DDD"];
$tel_completo  = $ddd . $telefone;

//Probable error
$de  = "Duplicate entry";
$fke = "for key 'email'";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO `prospeccao`(`nome`, `telefone`, `email`) VALUES ('{$nome}','{$tel_completo}','{$email}')";

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
    </script>";
}

$conn->close();
?>