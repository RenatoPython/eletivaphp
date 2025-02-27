<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Resposta do exercicio 15</h1>

        <?php
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                try{
                    // Recupera os valores de peso e altura
                    $peso = $_POST['peso'];
                    $altura = $_POST['altura'];
                    
                    // Calcula o IMC: peso / altura²
                    $imc = $peso / ($altura * $altura);
                    
                    // Exibe o resultado
                    echo "<p>Seu IMC é: " . number_format($imc, 2) . "</p>";

                    // Exibe a classificação do IMC
                    if ($imc < 18.5) {
                        echo "<p>Classificação: Abaixo do peso</p>";
                    } elseif ($imc >= 18.5 && $imc < 24.9) {
                        echo "<p>Classificação: Peso normal</p>";
                    } elseif ($imc >= 25 && $imc < 29.9) {
                        echo "<p>Classificação: Sobrepeso</p>";
                    } else {
                        echo "<p>Classificação: Obesidade</p>";
                    }
                    
                    }catch (Exception$e){
                    echo $e->getMessage();
                }
            }
        ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>