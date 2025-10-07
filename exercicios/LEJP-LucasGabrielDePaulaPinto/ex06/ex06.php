<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Média de 5 Números (PHP)</title>
  <link rel="stylesheet" href="css/ex06.css">
</head>
<body>
  <div class="container">
    <h1>Média de 5 Números</h1>
    <form method="post">
      <?php
        for ($i = 1; $i <= 5; $i++) {
          echo "<input type='number' name='num[]' placeholder='Número $i' required>";
        }
      ?>
      <br><br>
      <button type="submit">Calcular Média</button>
    </form>

    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numeros = $_POST['num'];
        $validos = array_filter($numeros, fn($n) => is_numeric($n));

        if (count($validos) === 5) {
          $soma = array_sum($numeros);
          $media = $soma / 5;
          echo "<p id='resultado'>A média é " . number_format($media, 2, ',', '.') . ".</p>";
        } else {
          echo "<p id='resultado'>Preencha todos os campos corretamente.</p>";
        }
      }
    ?>
  </div>
</body>
</html>
