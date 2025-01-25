<?php
header('Content-Type:application/json');

$hostName = "localhost";
$database = "biblioteca";
$user = "root"; 
$password = "";

try{
    $conexao = new PDO("mysql:host=$hostName;dbname=$database;", $user, $password);
    $conexao -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
}
catch(Exception $e){
    echo json_encode(['Sucesso'=> false, 'mensagem' => 'Erro de conexão '. $e->getMessage()]);
    exit;
}