<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Situação do Aluno (PHP)</title>
  <link rel="stylesheet" href="css/ex04.css">
</head>
<body>
  <h2>Situação do Aluno</h2>

  <form method="post">
    <input type="number" name="nota" placeholder="Nota do aluno" step="0.1" required><br>
    <input type="number" name="presenca" placeholder="% de presença" step="0.1" required><br>
    <button type="submit">Verificar Situação</button>
  </form>

  <div id="resultado">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nota = floatval($_POST["nota"]);
        $presenca = floatval($_POST["presenca"]);

        if ($presenca < 75) {
            echo "Reprovado por falta.";
        } elseif ($nota >= 6) {
            echo "Aprovado!";
        } elseif ($nota >= 4) {
            echo "Segunda época.";
        } else {
            echo "Reprovado.";
        }
    }
    ?>
  </div>
</body>
</html>
