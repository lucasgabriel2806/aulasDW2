<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arredondar Número - PHP</title>
  <link rel="stylesheet" href="css/ex09.css">
</head>
<body>
  <div class="container">
    <h2>Arredondar Número</h2>
    <form method="post">
      <input type="number" step="any" name="numero" placeholder="Digite um número">
      <button type="submit">Mostrar</button>
    </form>

    <div id="resultado">
      <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $num = floatval($_POST["numero"]);

          echo "Número original: $num<br>";

          $cima = ceil($num);
          $baixo = floor($num);

          echo "Arredondado pra cima (ceil): $cima<br>";
          echo "Arredondado pra baixo (floor): $baixo";
        }
      ?>
    </div>
  </div>
</body>
</html>
