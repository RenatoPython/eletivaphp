<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Exercicio 12</h1>
  
    <form method="post" action="exercicio12resposta.php">
                        
                        <div class="mb-3">
                          <label for="base">Base:</label>
                          <input type="number" id="base" name="base" step="any" required>
                        </div>
                    
                        <div class="mb-3">
                          <label for="expoente">Expoente:</label>
                          <input type="number" id="expoente" name="expoente" required>
                        </div>

                        <div class="mb-3">
                          <input type="submit" value="Calcular">
                        </div>
                    
                    
                </form>
            
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>