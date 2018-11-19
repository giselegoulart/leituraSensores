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
?>