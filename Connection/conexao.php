<?php
$hostname_conexao = "localhost";
$database_conexao = "masterforttelhas_site";
$username_conexao = "masterforttelhas_hoogli" ;
$password_conexao = 'Hoogli@2002';
global $conn;

try {
    $conn = new PDO("mysql:host=$hostname_conexao;dbname=$database_conexao", $username_conexao, $password_conexao);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "ERRO: " . $e->getMessage();
}
?>