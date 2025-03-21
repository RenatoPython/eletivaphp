<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Funções Aula 06</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1>Exemplo de uso de Funções - Formulário 4</h1>

    <form method="post" action="exercicio4resposta.php">

        <div class="mb-3">
        <label for="dia">Dia:</label>
        <input type="number" name="dia" id="dia" min="1" max="31" required>
        <div class="mb-3">
        <label for="mes">Mês:</label>
        <input type="number" name="mes" id="mes" min="1" max="12" required>
        <div class="mb-3">
        <label for="ano">Ano:</label>
        <input type="number" name="ano" id="ano" min="1" required>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>