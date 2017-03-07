<?php
// Server Data
$servername = "localhost";
$username = "u427946632_luke";
$password = "fallout";
$dbname = "u427946632_teste";
//Form Data
//Parte 3 - Endereço Comercial
$empresa       = $_POST[""];
$rua_emp       = $_POST[""];
$bairro_emp    = $_POST[""];
$cidade_emp    = $_POST[""];
$uf_emp        = $_POST[""];
$cep_emp       = $_POST[""];
$funcao        = $_POST[""];
$tempo_emp     = $_POST[""];
$telefone_emp  = $_POST[""];
$email_emp     = $_POST[""];
$celular_emp   = $_POST[""];
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

//Parte 2 - Endereço
$rua_res       = $_POST[""];
$bairro_res    = $_POST[""];
$cidade_res    = $_POST[""];
$uf_end        = $_POST[""];
$cep_res       = $_POST[""];
$tempo_res     = $_POST[""];
$telefone_res  = $_POST[""];

//Parte 3 - Endereço Comercial
$empresa       = $_POST[""];
$rua_emp       = $_POST[""];
$bairro_emp    = $_POST[""];
$cidade_emp    = $_POST[""];
$uf_emp        = $_POST[""];
$cep_emp       = $_POST[""];
$funcao        = $_POST[""];
$tempo_emp     = $_POST[""];
$telefone_emp  = $_POST[""];
$email_emp     = $_POST[""];
$celular_emp   = $_POST[""];

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

//Parte 5 - Atividades Comerciais
$  = $_POST[""];
$  = $_POST[""];

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
