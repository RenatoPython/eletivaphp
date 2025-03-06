<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1>Exercício 3</h1>

    <p>Digite 2 números para aparecerem em ordem crescente</p>

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

            if ($num1 > $num2)
                echo "$num2\t$num1";
            elseif ($num1 < $num2)
                echo "$num1\t$num2";
            else
                echo "Número iguais: $num1";
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