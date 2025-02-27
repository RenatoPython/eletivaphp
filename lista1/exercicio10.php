<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Exercicio 10</h1>
  
    <form method="post" action="exercicio10resposta.php">
                     
                        <div class="mb-3">
                          <label for="largura">Largura:</label>
                          <input type="number" name="largura" id="largura" step="0.1" required>
                        </div>
                    
                        <div class="mb-3">
                          <label for="altura">Altura:</label>
                          <input type="number" name="altura" id="altura" step="0.1" required>
                        </div>

                        <div class="mb-3">
                          <input type="submit" name="calcular_perimetro" value="Calcular">
                        </div>
                    
            
            

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>