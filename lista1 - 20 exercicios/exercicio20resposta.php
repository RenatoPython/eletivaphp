<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Resposta do exercicio 20</h1>

        <?php
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                try{
                    // Recupera os valores de distância e tempo
                    $distancia = $_POST['distancia'];
                    $tempo = $_POST['tempo'];
                    
                    // Calcula a velocidade média: Velocidade Média = Distância / Tempo
                    if ($tempo > 0) {
                        $velocidadeMedia = $distancia / $tempo;
                        
                    // Exibe o resultado
                    echo "<p>Distância percorrida: $distancia km</p>";
                    echo "<p>Tempo gasto: $tempo horas</p>";
                    echo "<p>Velocidade média: " . number_format($velocidadeMedia, 2, ',', '.') . " km/h</p>";
                    } else {
                      echo "<p>O tempo não pode ser zero ou negativo.</p>";
                    }

                    }catch (Exception$e){
                    echo $e->getMessage();
                }
            }
        ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>