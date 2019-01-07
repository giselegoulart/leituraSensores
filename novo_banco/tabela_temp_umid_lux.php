<?php
$Local = "localhost";
$Usuario = "root";
$Senha = "";

try {
    $conexao = new PDO("mysql:host=$Local;dbname=scd_smartcity", $Usuario, $Senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $erro)
    {
    echo "Erro da Conexão: " . $erro->getMessage();
    }

try {
    $sql = "CREATE TABLE temperatura_umidade_lux (
    temperatura_umidade_lux_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    temperatura float(6),
    umidade float(6),
    lux float(6),
    indice_calor float(6),
    data_hora TIMESTAMP
    )";
    $conexao->exec($sql);
    echo "Tabela temperatura_umidade criada com sucesso  <br/>";
    }
catch(PDOException $erro)
    {
    echo $sql . "<br>" . $erro->getMessage();
    }

$conn = null;    
?>