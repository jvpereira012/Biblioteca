<?php
require("./conexao.php");

$opcao = $_GET["opcao"]; // Obtém a tabela a ser consultada via GET
$resultados = []; // Inicializa a variável para armazenar os resultados

if ($opcao) {
    try {
        // Prepara e executa a consulta SQL
        $comando = $conexao->prepare("SELECT * FROM $opcao");
        $comando->execute();

        // Obtém os resultados da consulta
        $resultados = $comando->fetchAll(PDO::FETCH_ASSOC);

        // Exibe os resultados em formato HTML (ou o que preferir)
        foreach ($resultados as $linha) {
            echo implode(" ", $linha) . "<br />";
        }
    } catch (Exception $e) {
        echo "Erro ao executar a consulta: " . $e->getMessage();
    }
} else {
    echo "Nenhuma tabela especificada.";
}
?>
