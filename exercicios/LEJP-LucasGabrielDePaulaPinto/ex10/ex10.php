<?php
session_start();

// Inicializa o contador na primeira execução
if (!isset($_SESSION['pares'])) {
    $_SESSION['pares'] = 0;
}

$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = intval($_POST["numero"]);

    if ($numero == 0) {
        $mensagem = "Você digitou {$_SESSION['pares']} número(s) par(es).";
        // Reinicia a contagem
        $_SESSION['pares'] = 0;
    } else {
        if ($numero % 2 == 0) {
            $_SESSION['pares']++;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contar Números Pares (PHP)</title>
  <link rel="stylesheet" href="css/ex10.css">
</head>
<body>
  <h2>Contar Números Pares</h2>
  <p>Digite números (digite 0 para parar):</p>

  <form method="post">
    <input type="number" name="numero" placeholder="Digite um número" required>
    <button type="submit">Enviar</button>
  </form>

  <div id="resultado">
    <?php echo $mensagem; ?>
  </div>
</body>
</html>
