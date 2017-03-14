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
$data_nasc     = $_POST["data_nasc"];
$nacion        = $_POST["nacion"];
$natur         = $_POST["natur"];
$uf            = $_POST["uf"];
$celular       = $_POST["celular"];
$telefone      = $_POST["telefone"];
$cpf           = $_POST["cpf"];
$rg            = $_POST["rg"];
$emissor_rg    = $_POST["emissor_rg"];
$sexo          = $_POST["sexo"];
$est_civil     = $_POST["est_civil"];
$num_dep       = $_POST["num_dep"];
$nome_mae      = $_POST["nome_mae"];
$nome_pai      = $_POST["nome_pai"];
$profissao     = $_POST["profissao"];
$rendimento    = $_POST["rendimento"];
$rend_outros   = $_POST["rend_outros"];

//Tabela Endereco
$rua          = $_POST["rua"];
$bairro       = $_POST["bairro"];
$cidade       = $_POST["cidade"];
$uf_res       = $_POST["uf_res"];
$cep          = $_POST["cep"];
$casa_propria = $_POST["casa_propria"];
$mora_sozinho = $_POST["mora_sozinho"];
$tempo_res    = $_POST["tempo_res"];
$telefone     = $_POST["telefone"];

//Tabela Informacao Comercial
$empresa     = $_POST["empresa"];
$funcao      = $_POST["funcao"];
$rua_c       = $_POST["rua_c"];
$bairro_c    = $_POST["bairro_c"];
$cidade_c    = $_POST["cidade_c"];
$uf_c        = $_POST["uf_c"];
$cep_c       = $_POST["cep_c"];
$tempo_c     = $_POST["tempo_c"];
$telefone_c  = $_POST["telefone_c"];
$celular_c   = $_POST["celular_c"];
$email_c     = $_POST["email_c"];

//Tabela Ref Pessoal
$nome_rp1      = $_POST["nome_rp1"];
$end_rp1       = $_POST["end_rp1"];
$celular_rp 1  = $_POST["celular_rp1"];
$nome_rp2      = $_POST["nome_rp2"];
$end_rp2       = $_POST["end_rp2"];
$celular_rp2   = $_POST["celular_rp2"];

//Tabela Ref Bancária
$banco       = $_POST["banco"];
$agencia     = $_POST["agencia"];
$conta       = $_POST["conta"];
$cheque_esp  = $_POST["cheque_esp"];
$limite      = $_POST["limite"];

/*
//Tabela Conjuge*
$nome_co           = $_POST[""];
$data_nasc_co      = $_POST[""];
$natur_co          = $_POST[""];
$uf_co             = $_POST[""];
$nacio_co          = $_POST[""];
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
*/

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO `cliente`(`cpf`, `nome`, `email`, `celular`, `data_nasc`, `nacion`, `natur`, `uf`, `est_civil`, `sexo`, `num_dep`, `rg`, `emissor_rg`, `profissao`, `nome_pai`, `nome_mae`, `rendimento`, `rend_outros`) VALUES ('{$cpf}','{$nome}','{$email}','{$celular}','{$data_nasc}','{$nacion}','{$natur}','{$uf}','{$est_civil}','{$sexo}','{$num_dep}','{$rg}'   ,'{$emissor_rg}','{$profissao}','{$nome_pai}','{$nome_mae}','{$rendimento}','{$rend_outros}')";

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
