<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Operações com Dois Números - PHP</title>
  <link rel="stylesheet" href="css/ex02.css">
</head>
<body>

  <h1>Operações com Dois Números</h1>

  <form method="post">
    <input type="number" name="num1" placeholder="Digite o primeiro número" required>
    <input type="number" name="num2" placeholder="Digite o segundo número" required>
    <br>
    <button type="submit" name="calcular">Calcular</button>
  </form>

  <?php
  if (isset($_POST['calcular'])) {
      $n1 = floatval($_POST['num1']);
      $n2 = floatval($_POST['num2']);

      $soma = $n1 + $n2;
      $sub = $n1 - $n2;
      $mult = $n1 * $n2;
      $div = $n2 != 0 ? round($n1 / $n2, 2) : "Divisão por zero!";

      echo "<div class='resultado'>
              <strong>Resultados:</strong><br>
              Soma: $soma <br>
              Subtração: $sub <br>
              Multiplicação: $mult <br>
              Divisão: $div
            </div>";
  }
  ?>

</body>
</html>
