<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1>Exercício 2</h1>

    <p>Digite 2 número para somar (se os números forem iguais, o resultado é o triplo da soma)</p>

    <form method="POST">
        <div class="mb-3">
            <label for="numero1" class="form-label">Número 1:</label>
            <input type="number" id="numero1" name="numero1" class="form-control" required="">
        </div>

        <div class="mb-3">
            <label for="numero2" class="form-label">Número 2:</label>
            <input type="number" id="numero2" name="numero2" class="form-control" required="">
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        try {
            $num1 = $_POST['numero1'];
            $num2 = $_POST['numero2'];

            if ($num1 == $num2) {
                $triplo_soma = ($num1 + $num2) * 3;
                echo "\nOs número são iguais, o triplo da soma é $triplo_soma";
            } else {
                $soma = $num1 + $num2;
                echo "\nA soma é $soma";
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>