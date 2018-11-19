<?php
include "Arquivo_de_Conexao.php";

try {
    $sql = "CREATE TABLE lux (
    lux_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    lux VARCHAR(6),
    data_hora TIMESTAMP
    )";
    $conexao->exec($sql);
    echo "Tabela lux criada com sucesso <br/>";
    }
catch(PDOException $erro)
    {
    echo $sql . "<br>" . $erro->getMessage();
    }

$conn = null;
?>