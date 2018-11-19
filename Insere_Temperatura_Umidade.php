<?php
include "Arquivo_de_Conexao.php";

    $temperatura = $_GET['temperatura'];
    $umidade = $_GET['umidade'];
    $indice_calor = $_GET['indice_calor'];
    $efeito_indice_calor = null;

    if ( $indice_calor >=27 && $indice_calor <32) {
        $efeito_indice_calor = "Cuidado - possibilidade de fadiga apos exposicao e atividade prolongadas";
    } elseif ($indice_calor >=32 && $indice_calor <41) {
        $efeito_indice_calor = "Cuidado extremo - hipertermia e caimbras de calor possiveis";
    } elseif ($indice_calor >=41 && $indice_calor <54) {
        $efeito_indice_calor = "Perigo - hipertermia e câimbras de calor prováveis";
    } elseif ($indice_calor >=54) {
        $efeito_indice_calor = "Perigo extremo - hipertermia e caimbras de calor iminentes";
    } else {
        $efeito_indice_calor = "Nenhum efeito descrito";
    }

    $SQL_INSERT = "INSERT INTO temperatura_umidade (temperatura, umidade, indice_calor, efeito_indice_calor) VALUES (:T, :U, :I, :E)";
    $stmt = $conexao->prepare($SQL_INSERT);
    $stmt->bindParam(":T", $temperatura);
    $stmt->bindParam(":U", $umidade);
    $stmt->bindParam(":I", $indice_calor);
    $stmt->bindParam(":E", $efeito_indice_calor);
    if($stmt->execute()) {
        echo "DADOS INSERIDOS COM SUCESSO <br/>";
    } else {
        echo "ERRO AO INSERIR DADOS <br/>";
    }
    $conexao = null;
?>