<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Médias de Alunos (PHP)</title>
  <link rel="stylesheet" href="css/ex07.css">
</head>
<body>
  <div class="container">
    <h1>Médias de 3 Alunos</h1>
    <form method="post">
      <?php
        for ($aluno = 1; $aluno <= 3; $aluno++) {
          echo "<div class='aluno'>";
          echo "<h3>Aluno $aluno</h3>";
          for ($nota = 1; $nota <= 2; $nota++) {
            echo "<input type='number' name='notas[$aluno][$nota]' step='any' placeholder='Nota $nota' required>";
          }
          echo "</div>";
        }
      ?>
      <button type="submit">Calcular Médias</button>
    </form>

    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["notas"])) {
        $notas = $_POST["notas"];
        echo "<div id='resultado'>";
        foreach ($notas as $aluno => $duasNotas) {
          $nota1 = floatval($duasNotas[1]);
          $nota2 = floatval($duasNotas[2]);
          $media = ($nota1 + $nota2) / 2;
          echo "<p>Aluno $aluno: Média = " . number_format($media, 2, ',', '.') . "</p>";
        }
        echo "</div>";
      }
    ?>
  </div>
</body>
</html>
