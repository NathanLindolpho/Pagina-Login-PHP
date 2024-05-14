<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TJ Security - Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
/* Estilos gerais */
body {
  font-family: 'Arial', sans-serif;
  background-color: #f4f4f4;
  margin: 0;
  padding: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
}

.container {
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  padding: 40px;
  max-width: 400px;
  width: 100%;
  text-align: center;
}

/* Estilos do formulário */
.form-box h2 {
  color: #333;
  margin-bottom: 30px;
}

.input-group {
  margin-bottom: 20px;
}

label {
  display: block;
  margin-bottom: 5px;
  color: #555;
  font-weight: bold;
}

input[type="email"],
input[type="password"] {
  width: 100%;
  padding: 10px;
  border: 1px solid #ddd;
  border-radius: 4px;
  box-sizing: border-box;
}

button[type="submit"] {
  background-color: #008CBA;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 16px;
  transition: background-color 0.3s;
}

button[type="submit"]:hover {
  background-color: #0077A3;
}

/* Estilos de mensagens */
.success {
  color: green;
  font-weight: bold;
  margin-top: 10px;
}

.error {
  color: red;
  font-weight: bold;
  margin-top: 10px;
}


</style>
<body>
    <div class="container">
        <div class="form-box">
            <h2>Cadastro TJ Security</h2>
            <form action="motor.php" method="post">
                <div class="input-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" required>
                </div>
                <div class="input-group">
                    <label for="senha">Senha:</label>
                    <input type="password" name="senha" id="senha" required>
                </div>
                <button type="submit">Cadastrar</button>
            </form>
            <?php 
                if(isset($_GET['cod'])){
                    $codigo = filter_var($_GET['cod'], FILTER_SANITIZE_NUMBER_INT);
                    if ($codigo == 1) {
                        echo "<p class='success'>Cadastrado com sucesso!</p>";
                    } else { 
                        echo "<p class='error'>Erro no cadastro!</p>";
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>



