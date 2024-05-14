<?php
include 'conexao.php'; // Inclui o Script de Conexão

// Captura o POST que veio da REDE 
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    // Captura o E-mail para variavel EMAIL
    $email = htmlspecialchars ($_POST["email"]);
    $password = password_hash($_POST["senha"],PASSWORD_DEFAULT);

    // Prepara o SQL para Evitar SQL Injection
    try{
        $stmt = $pdo->prepare("INSERT INTO Usuario (email,senha) VALUES (:email,:senha)");
        $stmt->bindParam(':email',$email);
        $stmt->bindParam(':senha',$password);

        //Executa os arquivos limpos
        $stmt->execute();

        // Redireciona para a tela de cadastro.html
        header('Location: ./cadastro.php?cod=1');

    }catch(PDOException $e){
        
        header('Location: ./cadastro.php?cod=2');

    }

    // Anula a conexão por segurança 
    $pdo = null;
}