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
$nome_rp      = $_POST["nome_rp1"];
$endereco_rp       = $_POST["end_rp1"];
$telefone_rp    = $_POST["celular_rp1"];
$nome_rp2      = $_POST["nome_rp2"];
$endereco_rp2       = $_POST["end_rp2"];
$telefone_rp2   = $_POST["celular_rp2"];

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
$nacio_co          = $_POST["nacio_co"];
$rg_co             = $_POST["rg_co"];
$emissor_rg_co       = $_POST["emissor_rg_co"];
$cpf_co            = $_POST["cpf_co"];
$empresa_co        = $_POST["empresa_co"];
$funcao_co         = $_POST["funcao_co"];
$tempo_serv_co     = $_POST["tempo_serv_co"];
$celular_co       = $_POST["celular_co"];
$rendimento_co     = $_POST["rendimento_co"];

//Tabela Imovel
$especie_imovel     = $_POST["especie_imovel"];
$end_imovel         = $_POST["end_imovel"];
$data_aquis         = $_POST["data_aquis"];
$valor_venal        = $_POST["valor_venal"];
$valor_divida       = $_POST["valor_venal"];

//Tabela Carro
$marca   = $_POST["marca"];
$modelo  = $_POST["modelo"];
$ano     = $_POST["ano"];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if(strcmp($est_civil,"casado") == 0){
    

$sql = "BEGIN;

INSERT INTO `cliente`(`cpf`, `nome`, `email`, `celular`, `data_nasc`, `nacion`, `natur`, `uf`, `est_civil`, `sexo`, `num_dep`, `rg`, `emissor_rg`, `profissao`, `nome_pai`, `nome_mae`, `rendimento`, `rend_outros`) 

VALUES 

('{$cpf}','{$nome}','{$email}','{$celular}','{$data_nasc}','{$nacion}','{$natur}','{$uf}','{$est_civil}','{$sexo}','{$num_dep}','{$rg}'   ,'{$emissor_rg}','{$profissao}','{$nome_pai}','{$nome_mae}','{$rendimento}','{$rend_outros}');

INSERT INTO `endereco`(`cep`, `rua`, `bairro`, `cidade`, `uf`, `tempo_res`, `telefone`, `casa_propria`, `mora_sozinho`) 

VALUES 

('{$cep}','{$rua}','{$bairro}','{$cidade}','{$uf_res}','{$tempo_res}','{$telefone}','{$casa_propria}','{$mora_sozinho}');

INSERT INTO `inf_comercial`(`cep_c`, `empresa_c`, `rua_c`, `bairro_c`, `cidade_c`, `uf_c`, `funcao_c`, `tempo_c`, `telefone_c`, `email_c`, `celular_c`) 

VALUES 

('{$cep_c}','{$empresa_c}','{$rua_c}','{$bairro_c}','{$cidade_c}','{$uf_c}','{$funcao_c}','{$tempo_c}','{$telefone_c}','{$email_c}','{$celular_c}');

INSERT INTO `conjuge`(`cpf_co`, `nome_co`, `data_nasc_co`, `natur_co`, `uf_co`, `nacion_co`, `rg_co`, `emissor_rg_co`, `empresa_co`, `funcao_co`, `tempo_serv_co`, `celular_co`, `rendimento_co`)

VALUES 

('{$cpf_co}','{$nome_co}','{$data_nasc_co}','{$natur_co}','{$uf_co}','{$nacion_co}','{$rg_co}','{$emissor_rg_co}','{$empresa_co}','{$funcao_co}','{$tempo_serv_co}','{$celular_co}','{$rendimento_co}');

INSERT INTO `imovel`(`especie_imovel`, `end_imovel`, `data_aquis`, `valor_venal`, `valor_divida`) 

VALUES 

('{$especie_imovel}','{$end_imovel}','{$data_aquis}','{$valor_venal}','{$valor_divida}');

INSERT INTO `carro`(`marca`, `modelo`, `ano`) 

VALUES

 ('{$marca}','{$modelo}','{$ano}');

INSERT INTO `ref_pessoal`(`nome_rp`, `endereco_rp`, `telefone_rp`)

VALUES

('{$nome_rp}','{$endereco_rp}','{$telefone_rp}');

INSERT INTO `ref_pessoal`(`nome_rp`, `endereco_rp`, `telefone_rp`)

VALUES

('{$nome_rp2}','{$endereco_rp2}','{$telefone_rp2}');

INSERT INTO `ref_bancaria`(`banco_rb`, `agencia_rb`, `conta_rb`, `cheque_esp_rb`, `limite_rb`)

VALUES

('{$banco_rb}','{$agencia_rb}','{$conta_rb}','{$cheque_esp_rb}','{$limite_rb}');

COMMIT;";
    
}else{
    
$sql = "BEGIN;

INSERT INTO `cliente`(`cpf`, `nome`, `email`, `celular`, `data_nasc`, `nacion`, `natur`, `uf`, `est_civil`, `sexo`, `num_dep`, `rg`, `emissor_rg`, `profissao`, `nome_pai`, `nome_mae`, `rendimento`, `rend_outros`) 

VALUES 

('{$cpf}','{$nome}','{$email}','{$celular}','{$data_nasc}','{$nacion}','{$natur}','{$uf}','{$est_civil}','{$sexo}','{$num_dep}','{$rg}'   ,'{$emissor_rg}','{$profissao}','{$nome_pai}','{$nome_mae}','{$rendimento}','{$rend_outros}');

INSERT INTO `endereco`(`cep`, `rua`, `bairro`, `cidade`, `uf`, `tempo_res`, `telefone`, `casa_propria`, `mora_sozinho`) 

VALUES 

('{$cep}','{$rua}','{$bairro}','{$cidade}','{$uf_res}','{$tempo_res}','{$telefone}','{$casa_propria}','{$mora_sozinho}');

INSERT INTO `inf_comercial`(`cep_c`, `empresa_c`, `rua_c`, `bairro_c`, `cidade_c`, `uf_c`, `funcao_c`, `tempo_c`, `telefone_c`, `email_c`, `celular_c`) 

VALUES 

('{$cep_c}','{$empresa_c}','{$rua_c}','{$bairro_c}','{$cidade_c}','{$uf_c}','{$funcao_c}','{$tempo_c}','{$telefone_c}','{$email_c}','{$celular_c}');

INSERT INTO `imovel`(`especie_imovel`, `end_imovel`, `data_aquis`, `valor_venal`, `valor_divida`) 

VALUES 

('{$especie_imovel}','{$end_imovel}','{$data_aquis}','{$valor_venal}','{$valor_divida}');

INSERT INTO `carro`(`marca`, `modelo`, `ano`) 

VALUES

 ('{$marca}','{$modelo}','{$ano}');

INSERT INTO `ref_pessoal`(`nome_rp`, `endereco_rp`, `telefone_rp`)

VALUES

('{$nome_rp}','{$endereco_rp}','{$telefone_rp}');

INSERT INTO `ref_pessoal`(`nome_rp`, `endereco_rp`, `telefone_rp`)

VALUES

('{$nome_rp2}','{$endereco_rp2}','{$telefone_rp2}');

INSERT INTO `ref_bancaria`(`banco_rb`, `agencia_rb`, `conta_rb`, `cheque_esp_rb`, `limite_rb`)

VALUES

('{$banco_rb}','{$agencia_rb}','{$conta_rb}','{$cheque_esp_rb}','{$limite_rb}');

COMMIT;";
    
}
    
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
