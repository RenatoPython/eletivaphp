<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Resposta do exercicio 17</h1>

        <?php
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                try{
                    // Recupera os valores do capital, taxa e período
                    $capital = $_POST['capital'];
                    $taxa = $_POST['taxa'];
                    $periodo = $_POST['periodo'];
                    
                    // Calcula os juros simples: Juros = Capital * Taxa * Período
                    $juros = $capital * ($taxa / 100) * $periodo;
                    
                    // Exibe o resultado
                    echo "<p>Capital inicial: R$ " . number_format($capital, 2, ',', '.') . "</p>";
                    echo "<p>Taxa de juros: $taxa% ao mês</p>";
                    echo "<p>Período: $periodo mês(es)</p>";
                    echo "<p>Juros simples: R$ " . number_format($juros, 2, ',', '.') . "</p>";

                  }catch (Exception$e){
                    echo $e->getMessage();
                }
                }
            
        ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>