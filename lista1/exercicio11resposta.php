<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Resposta do exercicio 11</h1>

        <?php
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                try{
                  $raio = $_POST['raio'];
        
                  // Verificando se o valor do raio é válido
                  if ($raio > 0) {
                      $perimetro = 2 * pi() * $raio;
                      echo "<p>O perímetro do círculo é: " . number_format($perimetro, 2) . " unidades.</p>";
                  } else {
                      echo "<p>Por favor, insira um valor válido para o raio.</p>";
                  }
                  
                }catch (Exception$e){
                echo $e->getMessage();
              }
            }
        ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>