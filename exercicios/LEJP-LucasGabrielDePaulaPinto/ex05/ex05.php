<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Soma de 1 até N (PHP)</title>
  <link rel="stylesheet" href="css/ex05.css">
</head>
<body>
  <div class="container">
    <h1>Soma de 1 até N</h1>
    <form method="post">
      <input type="number" name="numero" placeholder="Digite um número" required />
      <button type="submit">Calcular Soma</button>
    </form>

    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = intval($_POST["numero"]);
        if ($n >= 1) {
          $soma = ($n * ($n + 1)) / 2;
          echo "<p id='resultado'>A soma de 1 até $n é $soma.</p>";
        } else {
          echo "<p id='resultado'>Digite um número válido (maior ou igual a 1)</p>";
        }
      }
    ?>
  </div>
</body>
</html>
