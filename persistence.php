<?php
// Server Data
include 'config.php';
include 'query.php';
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
$empresa_c     = $_POST["empresa"];
$funcao_c      = $_POST["funcao"];
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
$nome_rp       = $_POST["nome_rp1"];
$endereco_rp   = $_POST["end_rp1"];
$telefone_rp   = $_POST["celular_rp1"];
$nome_rp2      = $_POST["nome_rp2"];
$endereco_rp2  = $_POST["end_rp2"];
$telefone_rp2  = $_POST["celular_rp2"];

//Tabela Ref Bancária
$banco_rb       = $_POST["banco"];
$agencia_rb     = $_POST["agencia"];
$conta_rb       = $_POST["conta"];
$cheque_esp_rb  = $_POST["cheque_esp"];
$limite_rb      = $_POST["limite"];


//Tabela Conjuge*
$nome_co           = $_POST["nome_co"];
$data_nasc_co      = $_POST["data_nasc_co"];
$natur_co          = $_POST["natur_co"];
$uf_co             = $_POST["uf_co"];
$nacion_co         = $_POST["nacio_co"];
$rg_co             = $_POST["rg_co"];
$emissor_rg_co     = $_POST["emissor_rg_co"];
$cpf_co            = $_POST["cpf_co"];
$empresa_co        = $_POST["empresa_co"];
$funcao_co         = $_POST["funcao_co"];
$tempo_serv_co     = $_POST["tempo_serv_co"];
$celular_co        = $_POST["celular_co"];
$rendimento_co     = $_POST["rendimento_co"];

//Tabela Imovel
$tem_imovel         = $_POST["tem-imovel"];
$especie_imovel     = $_POST["especie_imovel"];
$end_imovel         = $_POST["end_imovel"];
$data_aquis         = $_POST["data_aquis"];
$valor_venal        = $_POST["valor_venal"];
$valor_divida       = $_POST["valor_venal"];

//Tabela Carro
$tem_carro  = $_POST["tem-carro"];
$marca      = $_POST["marca"];
$modelo     = $_POST["modelo"];
$ano        = $_POST["ano"];

//Erro sql
$de  = "Duplicate entry";
$fkcpf = "for key 'cpf_cliente'";

// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query_cliente = $cliente_q . "('{$cpf}','{$nome}','{$email}','{$celular}','{$data_nasc}','{$nacion}','{$natur}','{$uf}','{$est_civil}','{$sexo}','{$num_dep}','{$rg}','{$emissor_rg}','{$profissao}','{$nome_pai}','{$nome_mae}','{$rendimento}','{$rend_outros}');";

$query_endereco = $endereco_q . "({$cep},'{$rua}','{$bairro}','{$cidade}','{$uf_res}','{$tempo_res}',{$telefone},{$casa_propria},{$mora_sozinho});";

$query_comercial = $comercial_q . "('{$cep_c}','{$empresa_c}','{$rua_c}','{$bairro_c}','{$cidade_c}','{$uf_c}','{$funcao_c}','{$tempo_c}','{$telefone_c}','{$email_c}','{$celular_c}');";

$query_conjuge = $conjuge_q . "('{$cpf_co}','{$nome_co}','{$data_nasc_co}','{$natur_co}','{$uf_co}','{$nacion_co}','{$rg_co}','{$emissor_rg_co}','{$empresa_co}','{$funcao_co}','{$tempo_serv_co}','{$celular_co}','{$rendimento_co}');";

$query_imovel = $imovel_q . "('{$especie_imovel}','{$end_imovel}','{$data_aquis}','{$valor_venal}','{$valor_divida}');";

$query_carro = $carro_q . "('{$marca}','{$modelo}','{$ano}');";

$query_pessoal = $pessoal_q . "('{$nome_rp}','{$endereco_rp}','{$telefone_rp}');" . $pessoal_q . "('{$nome_rp2}','{$endereco_rp2}','{$telefone_rp2}');";

$query_bancaria = $banco_q . "('{$banco_rb}','{$agencia_rb}','{$conta_rb}','{$cheque_esp_rb}','{$limite_rb}');";

$sql = $query_cliente . $query_endereco . $query_pessoal . $query_bancaria;

if(strcmp($est_civil, "casado") == 0)       $sql .= $query_conjuge;
if(strcmp($profissao, "desempregado") != 0) $sql .= $query_comercial;
if(strcmp($tem_imovel, "sim") == 0)         $sql .= $query_imovel;
if(strcmp($tem_carro, "sim") == 0)          $sql .= $query_carro;


if ($conn->multi_query($sql) === TRUE) {
    //Msg
    echo "<script>
        alert('Seja bem-vindo a CarChange! Seu cadastro foi realizado com sucesso. Em breve entraremos em contato.');
        window.location.href='index.html';
    </script>";
} else if ((strpos($conn->error, $de) !== false) && (strpos($conn->error, $fkcpf) !== false)){
    //Msg de cpf repetido
    echo "<script>
        alert('Atenção: CPF já cadastrado.');
        window.location.href='cadastro.html';
    </script>";
    die();
} else {
    echo "Error: " . "<br>" . $conn->error;
}

$conn->close();
?>
