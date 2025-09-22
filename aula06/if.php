<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action=""></form>

    <hr>

    <p>Você é considerado:</p>
    
    <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $_idade = $_SERVER["idade"];

        }

    ?>

    <script>

        function verificarIdade() {
            
            let idade = parseInt(document.getElementById("idade").value);
            let resultado = "você é menor de idade";

            if (idade >= 18) {
                resultado = "Você é maior de idade";
            }

            document.getElementById("resposta").innerText = resultado;

        }

    </script>
    
    <p id="resposta"></p>

</body>
</html>