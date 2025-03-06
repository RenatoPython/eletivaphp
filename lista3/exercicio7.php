<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 7</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1>Exercício 7</h1>

    <p>Informe um número para ser somado do número 1 até o escolhido</p>

    <form method="POST">
        <div class="mb-3">
            <label for="num" class="form-label">Número:</label>
            <input type="number" id="num" name="num" class="form-control" required="">
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        try {
            $numero = $_POST['num'];
            $i = 1;
            $soma = 0;

            while ($i <= $numero) {
                $soma = $soma + $i;
                $i++;
            }
            echo "A soma dos números 1 até o $numero é $soma";
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