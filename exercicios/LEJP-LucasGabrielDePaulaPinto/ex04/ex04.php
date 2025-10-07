<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Área e Perímetro do Retângulo - PHP</title>
  <link rel="stylesheet" href="css/ex04.css">
</head>
<body>

  <h1>Área e Perímetro do Retângulo</h1>

  <form method="post">
    <input type="number" name="base" placeholder="Digite a base" step="0.1" required>
    <input type="number" name="altura" placeholder="Digite a altura" step="0.1" required>
    <br>
    <button type="submit" name="calcular">Calcular</button>
  </form>

  <?php
  if (isset($_POST['calcular'])) {
      $base = floatval($_POST['base']);
      $altura = floatval($_POST['altura']);

      $area = $base * $altura;
      $perimetro = 2 * ($base + $altura);

      echo "<div class='resultado'>
              <strong>Resultados:</strong><br>
              Área: " . number_format($area, 2, ',', '.') . "<br>
              Perímetro: " . number_format($perimetro, 2, ',', '.') . "
            </div>";
  }
  ?>

</body>
</html>