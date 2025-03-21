<?php
declare(strict_types=1);
?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resposta de Funções</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1>Exemplo de uso de Funções - Resposta 2</h1>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $palavra = $_POST["palavra"];
            $maiuscula = strtoupper($palavra);
            $minuscula = strtolower($palavra);
            echo "<p>Palavra em maiúsculas: $maiuscula</p>";
            echo "<p>Palavra em minúsculas: $minuscula</p>";
        }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>