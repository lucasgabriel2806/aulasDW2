<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Informações do Usuário (PHP)</title>
  <link rel="stylesheet" href="css/ex01.css">
</head>
<body>
  <h2>Informações do Usuário</h2>

  <form method="post">
    <input type="text" name="nome" placeholder="Nome completo" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="tel" name="telefone" placeholder="Telefone" required><br>
    <input type="number" name="idade" placeholder="Idade" required><br>
    <button type="submit">Exibir</button>
  </form>

  <div id="resultado">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = htmlspecialchars($_POST["nome"]);
        $email = htmlspecialchars($_POST["email"]);
        $telefone = htmlspecialchars($_POST["telefone"]);
        $idade = intval($_POST["idade"]);

        echo "$nome tem $idade anos. Seu email: $email e telefone: $telefone";
    }
    ?>
  </div>
</body>
</html>
