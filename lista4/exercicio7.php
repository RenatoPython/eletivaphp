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

    <form method="post" action="exercicio7resposta.php">

        <div class="mb-3">
            <label for="data1">Digite a primeira data (dd/mm/YYYY):</label>
            <input type="text" name="data1" id="data1" required>
        <div class="mb-3">   
            <label for="data2">Digite a segunda data (dd/mm/YYYY):</label>
            <input type="text" name="data2" id="data2" required>
        </div>
        <button type="submit" class="btn btn-primary">Calcular a diferença</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>