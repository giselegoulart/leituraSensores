<?php
include "Arquivo_de_Conexao.php";

try {
    $sql = "CREATE TABLE temperatura_umidade (
    temperatura_umidade_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    temperatura VARCHAR(6),
    umidade VARCHAR(6),
    indice_calor VARCHAR(6),
    efeito_indice_calor VARCHAR(300),
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