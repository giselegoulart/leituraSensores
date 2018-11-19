<?php
$Local = "localhost";
$Usuario = "root";
$Senha = "";

try {
    $conexao = new PDO("mysql:host=$Local", $Usuario, $Senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Criação do Banco scd_smartcity Sistema de Coleta de Dados para SmartCity
    $sql = "CREATE DATABASE scd_smartcity";
    $conexao->exec($sql);
    echo "Bando de Dados Criado com Sucesso <br/>";
    }
catch(PDOException $erro)
    {
    echo $sql . "<br>" . $erro->getMessage();
    }

$conexao = null;
?>