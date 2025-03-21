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
    <h1>Exemplo de uso de Funções - Resposta 7</h1>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $data1 = DateTime::createFromFormat('d/m/Y', $_POST["data1"]);
            $data2 = DateTime::createFromFormat('d/m/Y', $_POST["data2"]);
            
            if ($data1 && $data2) {
                $diferenca = $data1->diff($data2)->days;
                echo "<p>A diferença entre as datas é de $diferenca dias.</p>";
            } else {
                echo "<p>Por favor, insira datas válidas no formato dd/mm/YYYY.</p>";
            }
        } else if ($_SERVER[""] == "") {
    }
?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>