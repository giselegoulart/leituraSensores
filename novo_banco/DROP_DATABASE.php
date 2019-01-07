<?php
include "Arquivo_de_Conexao.php";

try {
    $sql = "DROP DATABASE scd_smartcity";

    $conexao->exec($sql);
    echo "Banco deletado com Sucesso <br/>";
    }
catch(PDOException $erro)
    {
    echo $sql . "<br>" . $erro->getMessage();
    }

$conn = null;
?>