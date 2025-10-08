<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fatorial de N (PHP)</title>
  <link rel="stylesheet" href="css/ex08.css">
</head>
<body>
  <div class="container">
    <h2>Calcular Fatorial</h2>
    <form method="post">
      <input type="number" name="numero" placeholder="Digite N" min="0">
      <button type="submit">Calcular</button>
    </form>

    <div id="resultado">
      <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $n = intval($_POST["numero"]);

          if ($n < 0) {
            echo "Digite um número inteiro não negativo!";
          } else {
            $fatorial = 1;
            for ($i = 1; $i <= $n; $i++) {
              $fatorial *= $i;
            }
            echo "O fatorial de $n é $fatorial";
          }
        }
      ?>
    </div>
  </div>
</body>
</html>
