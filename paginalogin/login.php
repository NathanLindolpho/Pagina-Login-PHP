<?php

include 'conexao.php';

/* Lógica : se existir uma requisao da pagina index.php do tipo Post
buscar no banco de dados se esse usuário existe, se existir logar e enviar
para a pagina Painel, se nao logar
*/

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars($_POST["email"]);
    $senha = $_POST['senha'];

    try {
        $stmt = $pdo->prepare("select * from usuario where email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($usuario) {
            //verifica se a senha criptografada está correta
            if (password_verify($senha, $usuario['senha'])) {
                session_start();
                $_SESSION['usuario_email'] = $usuario['email'];
                $_SESSION['usuario_logado'] = true;
                header("location: painel.php");
            } else {
                echo "Senha incorreta";
                echo "<a href='index.php'> Voltar para a tela Anterior </a>";
            }
        } else {
            echo "Usuário nao encontrado";
        }
    } catch (PDOException $e) {
        echo "Erro no login" . $e->getMessage();
    }
}