<?php
// Server Data
$servername = "localhost";
$username = "u427946632_admin";
$password = "oseompenmf231";
$dbname = "u427946632_carc";
//Form Data

//Tabela Cliente
$nome          = $_POST["nome"];
$email         = $_POST["email"];
$telefone      = $_POST["telefone"];
$data_nasc     = $_POST["data_nasc"];
$nacion        = $_POST["nacion"];
$natur         = $_POST["natur"];
$uf            = $_POST["uf"];
$est_civil     = $_POST["est_civil"];
$sexo          = $_POST["sexo"];
$num_dep       = $_POST["num_dep"];
$cpf           = $_POST["cpf"];
$rg            = $_POST["rg"];
$emissor_rg    = $_POST["emissor_rg"];
$profissao     = $_POST["profissao"];
$nome_pai      = $_POST["nome_pai"];
$nome_mae      = $_POST["nome_mae"];
$rendimento    = $_POST["rendimento"];
$rend_outros   = $_POST["rend_outros"];

//Tabela Endereco
$rua          = $_POST[""];
$bairro       = $_POST[""];
$cidade       = $_POST[""];
$uf           = $_POST[""];
$cep          = $_POST[""];
$tempo_res    = $_POST[""];
$telefone     = $_POST[""];
$casa_propria = $_POST[""];
$mora_sozinho = $_POST[""];

//Tabela Endereco Comercial
$empresa_c   = $_POST[""];
$rua_c       = $_POST[""];
$bairro_c    = $_POST[""];
$cidade_c    = $_POST[""];
$uf_c        = $_POST[""];
$cep_c       = $_POST[""];
$funcao_c    = $_POST[""];
$tempo_c     = $_POST[""];
$telefone_c  = $_POST[""];
$email_c     = $_POST[""];
$celular_c   = $_POST[""];

//Tabela Conjuge*
$nome_co           = $_POST[""];
$data_nasc_co      = $_POST[""];
$naturalidade_co   = $_POST[""];
$uf_co             = $_POST[""];
$nacionalidade_co  = $_POST[""];
$rg_co             = $_POST[""];
$emissor_rg        = $_POST[""];
$cpf_co            = $_POST[""];
$empresa_co        = $_POST[""];
$funcao_co         = $_POST[""];
$tempo_serv_co     = $_POST[""];
$telefone_co       = $_POST[""];
$rendimento_co     = $_POST[""];

//Tabela Imovel
$especie_imovel     = $_POST[""];
$end_imovel         = $_POST[""];
$data_aquis         = $_POST[""];
$valor_venal        = $_POST[""];
$valor_divida       = $_POST[""];

//Tabela Carro
$marca   = $_POST[""];
$modelo  = $_POST[""];
$ano     = $_POST[""];

//Tabela Ref Pessoal
$nome_rp      = $_POST[""];    //Fazer em JS uma lógica para adicionar pessoas
$end_rp       = $_POST[""];    //à lista de referências. Vamos pensar por enquanto
$telefone  = $_POST[""];    //que essas variáveis retornam vetores.

//Tabela Ref Comercial
$endereco_rc  = $_POST[""];
$telefone_rc  = $_POST[""];

//Tabela Ref Bancária
$banco_rb       = $_POST[""];
$agencia_rb     = $_POST[""];
$conta_rb       = $_POST[""];
$cheque_esp_rb  = $_POST[""];
$limite_rb      = $_POST[""];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO `cliente`(`cpf`, `nome`, `email`, `celular`, `data_nasc`, `nacion`, `natur`, `uf`, `est_civil`, `sexo`, `num_dep`, `rg`, `emissor_rg`, `profissao`, `nome_pai`, `nome_mae`, `rendimento`, `rend_outros`) VALUES ('{$cpf}','{$nome}','{$email}','{$celular}','{$data_nasc}','{$nacion}','{$natur}','{$uf}','{$est_civil}','{$sexo}','{$num_dep}','{$rg}','{$emissor_rg}','{$profissao}','{$nome_pai}','{$nome_mae}','{$rendimento}','{$rend_outros}')";

if ($conn->query($sql) === TRUE) {
    //Msg
    echo "<script>
        alert('Cadastro realizado com sucesso!');
        window.location.href='index.html';
    </script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
