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
    <h1>Exemplo de uso de Funções - Resposta 4</h1>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $dia = $_POST["dia"];
            $mes = $_POST["mes"];
            $ano = $_POST["ano"];
            
            if (checkdate($mes, $dia, $ano)) {
                echo "<p>Data válida: " . sprintf("%02d/%02d/%04d", $dia, $mes, $ano) . "</p>";
            } else {
                 echo "<p>Data inválida.</p>";
        }
}
?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>