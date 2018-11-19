<?php
include "Arquivo_de_Conexao.php";

    $lux = $_GET['lux'];

    $SQL_INSERT = "INSERT INTO lux (lux) VALUES (:L)";
    $stmt = $conexao->prepare($SQL_INSERT);
    $stmt->bindParam(":L", $lux);
    if($stmt->execute()) {
        echo "DADOS INSERIDOS COM SUCESSO <br/>";
    } else {
        echo "ERRO AO INSERIR DADOS <br/>";
    }
    $conexao = null;
?>