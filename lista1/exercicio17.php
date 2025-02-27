<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Exercicio 17</h1>

    
    <form method="post" action="exercicio17resposta.php">
                     
                        <div class="mb-3">
                          <label for="capital">Capital (R$):</label>
                          <input type="number" name="capital" id="capital" required step="any">
                        </div>
                    
                        <div class="mb-3">
                          <label for="taxa">Taxa de juros (%):</label>
                          <input type="number" name="taxa" id="taxa" required step="any">
                        </div>

                        <div class="mb-3">
                          <label for="periodo">Período (em meses):</label>
                          <input type="number" name="periodo" id="periodo" required step="any">
                        </div>

                        <div class="mb-3">
                          <input type="submit" value="Calcular Juros">
                        </div>
                    
                    
                </form>
            
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>