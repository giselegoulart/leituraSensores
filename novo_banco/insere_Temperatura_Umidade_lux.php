<?php
include "Arquivo_de_Conexao.php";

    $temperatura = $_GET['temperatura'];
    $umidade = $_GET['umidade'];
    $indice_calor = $_GET['indice_calor'];
    $lux = $_GET['lux'];

    $SQL_INSERT = "INSERT INTO temperatura_umidade_lux (temperatura, umidade, indice_calor, lux) VALUES (:T, :U, :I, :L)";
    $stmt = $conexao->prepare($SQL_INSERT);
    $stmt->bindParam(":T", $temperatura);
    $stmt->bindParam(":U", $umidade);
    $stmt->bindParam(":I", $indice_calor);
    $stmt->bindParam(":L", $lux);
    if($stmt->execute()) {
        echo "DADOS INSERIDOS COM SUCESSO <br/>";
    } else {
        echo "ERRO AO INSERIR DADOS <br/>";
    }
    $conexao = null;
?>