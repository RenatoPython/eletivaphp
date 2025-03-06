<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Resposta do exercicio 16</h1>

        <?php
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                try{
                      // Recupera os valores do preço e do percentual de desconto
                      $preco = $_POST['preco'];
                      $desconto = $_POST['desconto'];
                      
                      // Calcula o valor do desconto
                      $valorDesconto = ($preco * $desconto) / 100;
                      
                      // Calcula o preço com desconto
                      $precoComDesconto = $preco - $valorDesconto;
                      
                      // Exibe o resultado
                      echo "<p>Preço original: R$ " . number_format($preco, 2, ',', '.') . "</p>";
                      echo "<p>Desconto de $desconto%: R$ " . number_format($valorDesconto, 2, ',', '.') . "</p>";
                      echo "<p>Preço com desconto: R$ " . number_format($precoComDesconto, 2, ',', '.') . "</p>";
                
              }catch (Exception$e){
                echo $e->getMessage();
            }
          }
        ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>