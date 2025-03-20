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
    <h1>Exemplo de uso de Funções - Resposta 1</h1>

    <?php
        function manipularString(string $palavra): void{
            echo "<p>A palavra possui ". strlen($palavra)." caracteres.</p>"; // exibe quantos letras tem a palavra
            echo "<p>Letra A substituída por 4: ".str_replace("a","4", $palavra."</p>"); // troca letras
        }

        function gerarValorAleatorio(int $inicial, int $final): int{
            return rand($inicial, $final);  //rand gera valor aleatorio
        }

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        try {
            $palavra = $_POST['palavra'];
            manipularString(strtolower($palavra));
            $valor = gerarValorAleatorio(1,50);
            echo "<p>O valor gerado foi: ". $valor. "</p>";

            $numero = 3.555555;
            echo "<p>Mostrando duas casas decimais: ".number_format($numero, 2, ".", ".")."</p>";

        } catch (Exception $e) {
            echo "ERRO: " . $e->getMessage();
        }
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>