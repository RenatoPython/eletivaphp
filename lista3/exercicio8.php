<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 8</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1>Exercício 8</h1>

    <p>Informe um número para regressar do número escolhido até o 1</p>

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

            do {
                echo "$numero\t";
                $numero--;
            } while ($numero >= $i);

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