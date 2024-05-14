<?php
$host = "localhost"; // Endereço do servidor de BD
$dbname = "loginprocedural"; // nome do banco de dados
$usuario = "root"; // Usuário do Banco de dados
$senha = ""; // Senha do banco de dados

// Data Source Name
$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";

try{
    $pdo = new PDO($dsn, $usuario, $senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
}catch(PDOException $e){
    die("Erro de conexão : ". $e->getMessage());
}